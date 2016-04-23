<?php

namespace GitlabBundle\Service;

use EventBundle\Entity\RepositoryEvent;
use GamificationBundle\Service\RegisterEvent;
use GitlabBundle\Repository\CommentImportLogRepository;
use GitlabBundle\Repository\GitlabRepository;
use GitlabBundle\Repository\MergeRequestImportLogRepository;

class GitlabImporter
{
    /** @var GitlabRepository */
    private $gitlabRepository;

    /** @var CommentImportLogRepository */
    private $commentLogRepository;

    /** @var MergeRequestImportLogRepository */
    private $mergeRequestLogRepository;

    /** @var RegisterEvent */
    private $registerEvent;

    /**
     * @param GitlabRepository $gitlabRepository
     * @param CommentImportLogRepository $commentLogRepository
     * @param MergeRequestImportLogRepository $mergeRequestLogRepository
     */
    public function __construct(
        GitlabRepository $gitlabRepository,
        CommentImportLogRepository $commentLogRepository,
        MergeRequestImportLogRepository $mergeRequestLogRepository,
        RegisterEvent $registerEvent
    ) {
        $this->gitlabRepository = $gitlabRepository;
        $this->commentLogRepository = $commentLogRepository;
        $this->mergeRequestLogRepository = $mergeRequestLogRepository;
        $this->registerEvent = $registerEvent;
    }

    public function importAllData()
    {
        $this->importLatestsComments();
        $this->importLatestMergeRequests();
    }

    public function importLatestsComments()
    {
        $lastImportedId = $this->commentLogRepository->findLastImportedId();

        $comments = $this->gitlabRepository->getLatestsCommentsAfterId($lastImportedId);

        foreach ($comments as $gitlabComments) {
            $event = $this->createEventFromGitlabData(RepositoryEvent::COMMENT_EVENT, $gitlabComments);

            $this->registerEvent->register($event);
        }

        if ($comments) {
            $this->commentLogRepository->setLastImportedId($gitlabComments['note_id']);
        }
    }

    public function importLatestMergeRequests()
    {
        $lastImportedId = $this->mergeRequestLogRepository->findLastImportedId();

        $mergeRequests = $this->gitlabRepository->getLatestsMergeRequests($lastImportedId);

        foreach ($mergeRequests as $mergeRequest) {
            $event = $this->createEventFromGitlabData(RepositoryEvent::MERGE_REQUEST_EVENT, $mergeRequest);

            $this->registerEvent->register($event);
        }

        if ($mergeRequests) {
            $this->mergeRequestLogRepository->setLastImportedId($mergeRequest['mr_id']);
        }
    }

    /**
     * @param string $eventName
     * @param array $gitlabData
     * @return RepositoryEvent
     */
    private function createEventFromGitlabData($eventName, array $gitlabData)
    {
        $event = new RepositoryEvent();
        $event->setEvent($eventName);
        $event->setDate(\DateTime::createFromFormat(GitlabRepository::MYSQL_DATE_FORMAT, $gitlabData['created_at']));
        $event->setUser($gitlabData['username']);
        $event->setRepositoryReference(
            sprintf(
                'gitlab#%s/%s#%s',
                $gitlabData['namespace'],
                $gitlabData['project'],
                $gitlabData['iid']
            )
        );
        return $event;
    }
}
