<?php

namespace GitlabBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $encryptedPassword = '';

    /**
     * @var string
     */
    private $resetPasswordToken;

    /**
     * @var \DateTime
     */
    private $resetPasswordSentAt;

    /**
     * @var \DateTime
     */
    private $rememberCreatedAt;

    /**
     * @var integer
     */
    private $signInCount = '0';

    /**
     * @var \DateTime
     */
    private $currentSignInAt;

    /**
     * @var \DateTime
     */
    private $lastSignInAt;

    /**
     * @var string
     */
    private $currentSignInIp;

    /**
     * @var string
     */
    private $lastSignInIp;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $admin = '0';

    /**
     * @var integer
     */
    private $projectsLimit = '10';

    /**
     * @var string
     */
    private $skype = '';

    /**
     * @var string
     */
    private $linkedin = '';

    /**
     * @var string
     */
    private $twitter = '';

    /**
     * @var string
     */
    private $authenticationToken;

    /**
     * @var integer
     */
    private $themeId = '1';

    /**
     * @var string
     */
    private $bio;

    /**
     * @var integer
     */
    private $failedAttempts = '0';

    /**
     * @var \DateTime
     */
    private $lockedAt;

    /**
     * @var string
     */
    private $externUid;

    /**
     * @var string
     */
    private $provider;

    /**
     * @var string
     */
    private $username;

    /**
     * @var boolean
     */
    private $canCreateGroup = '1';

    /**
     * @var boolean
     */
    private $canCreateTeam = '1';

    /**
     * @var string
     */
    private $state;

    /**
     * @var integer
     */
    private $colorSchemeId = '1';

    /**
     * @var integer
     */
    private $notificationLevel = '1';

    /**
     * @var \DateTime
     */
    private $passwordExpiresAt;

    /**
     * @var integer
     */
    private $createdById;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     */
    private $confirmedAt;

    /**
     * @var \DateTime
     */
    private $confirmationSentAt;

    /**
     * @var string
     */
    private $unconfirmedEmail;

    /**
     * @var boolean
     */
    private $hideNoSshKey = '0';

    /**
     * @var \DateTime
     */
    private $lastCredentialCheckAt;

    /**
     * @var string
     */
    private $websiteUrl = '';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set encryptedPassword
     *
     * @param string $encryptedPassword
     *
     * @return Users
     */
    public function setEncryptedPassword($encryptedPassword)
    {
        $this->encryptedPassword = $encryptedPassword;

        return $this;
    }

    /**
     * Get encryptedPassword
     *
     * @return string
     */
    public function getEncryptedPassword()
    {
        return $this->encryptedPassword;
    }

    /**
     * Set resetPasswordToken
     *
     * @param string $resetPasswordToken
     *
     * @return Users
     */
    public function setResetPasswordToken($resetPasswordToken)
    {
        $this->resetPasswordToken = $resetPasswordToken;

        return $this;
    }

    /**
     * Get resetPasswordToken
     *
     * @return string
     */
    public function getResetPasswordToken()
    {
        return $this->resetPasswordToken;
    }

    /**
     * Set resetPasswordSentAt
     *
     * @param \DateTime $resetPasswordSentAt
     *
     * @return Users
     */
    public function setResetPasswordSentAt($resetPasswordSentAt)
    {
        $this->resetPasswordSentAt = $resetPasswordSentAt;

        return $this;
    }

    /**
     * Get resetPasswordSentAt
     *
     * @return \DateTime
     */
    public function getResetPasswordSentAt()
    {
        return $this->resetPasswordSentAt;
    }

    /**
     * Set rememberCreatedAt
     *
     * @param \DateTime $rememberCreatedAt
     *
     * @return Users
     */
    public function setRememberCreatedAt($rememberCreatedAt)
    {
        $this->rememberCreatedAt = $rememberCreatedAt;

        return $this;
    }

    /**
     * Get rememberCreatedAt
     *
     * @return \DateTime
     */
    public function getRememberCreatedAt()
    {
        return $this->rememberCreatedAt;
    }

    /**
     * Set signInCount
     *
     * @param integer $signInCount
     *
     * @return Users
     */
    public function setSignInCount($signInCount)
    {
        $this->signInCount = $signInCount;

        return $this;
    }

    /**
     * Get signInCount
     *
     * @return integer
     */
    public function getSignInCount()
    {
        return $this->signInCount;
    }

    /**
     * Set currentSignInAt
     *
     * @param \DateTime $currentSignInAt
     *
     * @return Users
     */
    public function setCurrentSignInAt($currentSignInAt)
    {
        $this->currentSignInAt = $currentSignInAt;

        return $this;
    }

    /**
     * Get currentSignInAt
     *
     * @return \DateTime
     */
    public function getCurrentSignInAt()
    {
        return $this->currentSignInAt;
    }

    /**
     * Set lastSignInAt
     *
     * @param \DateTime $lastSignInAt
     *
     * @return Users
     */
    public function setLastSignInAt($lastSignInAt)
    {
        $this->lastSignInAt = $lastSignInAt;

        return $this;
    }

    /**
     * Get lastSignInAt
     *
     * @return \DateTime
     */
    public function getLastSignInAt()
    {
        return $this->lastSignInAt;
    }

    /**
     * Set currentSignInIp
     *
     * @param string $currentSignInIp
     *
     * @return Users
     */
    public function setCurrentSignInIp($currentSignInIp)
    {
        $this->currentSignInIp = $currentSignInIp;

        return $this;
    }

    /**
     * Get currentSignInIp
     *
     * @return string
     */
    public function getCurrentSignInIp()
    {
        return $this->currentSignInIp;
    }

    /**
     * Set lastSignInIp
     *
     * @param string $lastSignInIp
     *
     * @return Users
     */
    public function setLastSignInIp($lastSignInIp)
    {
        $this->lastSignInIp = $lastSignInIp;

        return $this;
    }

    /**
     * Get lastSignInIp
     *
     * @return string
     */
    public function getLastSignInIp()
    {
        return $this->lastSignInIp;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Users
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return Users
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set projectsLimit
     *
     * @param integer $projectsLimit
     *
     * @return Users
     */
    public function setProjectsLimit($projectsLimit)
    {
        $this->projectsLimit = $projectsLimit;

        return $this;
    }

    /**
     * Get projectsLimit
     *
     * @return integer
     */
    public function getProjectsLimit()
    {
        return $this->projectsLimit;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Users
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Users
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Users
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set authenticationToken
     *
     * @param string $authenticationToken
     *
     * @return Users
     */
    public function setAuthenticationToken($authenticationToken)
    {
        $this->authenticationToken = $authenticationToken;

        return $this;
    }

    /**
     * Get authenticationToken
     *
     * @return string
     */
    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
    }

    /**
     * Set themeId
     *
     * @param integer $themeId
     *
     * @return Users
     */
    public function setThemeId($themeId)
    {
        $this->themeId = $themeId;

        return $this;
    }

    /**
     * Get themeId
     *
     * @return integer
     */
    public function getThemeId()
    {
        return $this->themeId;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return Users
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set failedAttempts
     *
     * @param integer $failedAttempts
     *
     * @return Users
     */
    public function setFailedAttempts($failedAttempts)
    {
        $this->failedAttempts = $failedAttempts;

        return $this;
    }

    /**
     * Get failedAttempts
     *
     * @return integer
     */
    public function getFailedAttempts()
    {
        return $this->failedAttempts;
    }

    /**
     * Set lockedAt
     *
     * @param \DateTime $lockedAt
     *
     * @return Users
     */
    public function setLockedAt($lockedAt)
    {
        $this->lockedAt = $lockedAt;

        return $this;
    }

    /**
     * Get lockedAt
     *
     * @return \DateTime
     */
    public function getLockedAt()
    {
        return $this->lockedAt;
    }

    /**
     * Set externUid
     *
     * @param string $externUid
     *
     * @return Users
     */
    public function setExternUid($externUid)
    {
        $this->externUid = $externUid;

        return $this;
    }

    /**
     * Get externUid
     *
     * @return string
     */
    public function getExternUid()
    {
        return $this->externUid;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return Users
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set canCreateGroup
     *
     * @param boolean $canCreateGroup
     *
     * @return Users
     */
    public function setCanCreateGroup($canCreateGroup)
    {
        $this->canCreateGroup = $canCreateGroup;

        return $this;
    }

    /**
     * Get canCreateGroup
     *
     * @return boolean
     */
    public function getCanCreateGroup()
    {
        return $this->canCreateGroup;
    }

    /**
     * Set canCreateTeam
     *
     * @param boolean $canCreateTeam
     *
     * @return Users
     */
    public function setCanCreateTeam($canCreateTeam)
    {
        $this->canCreateTeam = $canCreateTeam;

        return $this;
    }

    /**
     * Get canCreateTeam
     *
     * @return boolean
     */
    public function getCanCreateTeam()
    {
        return $this->canCreateTeam;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Users
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set colorSchemeId
     *
     * @param integer $colorSchemeId
     *
     * @return Users
     */
    public function setColorSchemeId($colorSchemeId)
    {
        $this->colorSchemeId = $colorSchemeId;

        return $this;
    }

    /**
     * Get colorSchemeId
     *
     * @return integer
     */
    public function getColorSchemeId()
    {
        return $this->colorSchemeId;
    }

    /**
     * Set notificationLevel
     *
     * @param integer $notificationLevel
     *
     * @return Users
     */
    public function setNotificationLevel($notificationLevel)
    {
        $this->notificationLevel = $notificationLevel;

        return $this;
    }

    /**
     * Get notificationLevel
     *
     * @return integer
     */
    public function getNotificationLevel()
    {
        return $this->notificationLevel;
    }

    /**
     * Set passwordExpiresAt
     *
     * @param \DateTime $passwordExpiresAt
     *
     * @return Users
     */
    public function setPasswordExpiresAt($passwordExpiresAt)
    {
        $this->passwordExpiresAt = $passwordExpiresAt;

        return $this;
    }

    /**
     * Get passwordExpiresAt
     *
     * @return \DateTime
     */
    public function getPasswordExpiresAt()
    {
        return $this->passwordExpiresAt;
    }

    /**
     * Set createdById
     *
     * @param integer $createdById
     *
     * @return Users
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * Get createdById
     *
     * @return integer
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Users
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     *
     * @return Users
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * Set confirmedAt
     *
     * @param \DateTime $confirmedAt
     *
     * @return Users
     */
    public function setConfirmedAt($confirmedAt)
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }

    /**
     * Get confirmedAt
     *
     * @return \DateTime
     */
    public function getConfirmedAt()
    {
        return $this->confirmedAt;
    }

    /**
     * Set confirmationSentAt
     *
     * @param \DateTime $confirmationSentAt
     *
     * @return Users
     */
    public function setConfirmationSentAt($confirmationSentAt)
    {
        $this->confirmationSentAt = $confirmationSentAt;

        return $this;
    }

    /**
     * Get confirmationSentAt
     *
     * @return \DateTime
     */
    public function getConfirmationSentAt()
    {
        return $this->confirmationSentAt;
    }

    /**
     * Set unconfirmedEmail
     *
     * @param string $unconfirmedEmail
     *
     * @return Users
     */
    public function setUnconfirmedEmail($unconfirmedEmail)
    {
        $this->unconfirmedEmail = $unconfirmedEmail;

        return $this;
    }

    /**
     * Get unconfirmedEmail
     *
     * @return string
     */
    public function getUnconfirmedEmail()
    {
        return $this->unconfirmedEmail;
    }

    /**
     * Set hideNoSshKey
     *
     * @param boolean $hideNoSshKey
     *
     * @return Users
     */
    public function setHideNoSshKey($hideNoSshKey)
    {
        $this->hideNoSshKey = $hideNoSshKey;

        return $this;
    }

    /**
     * Get hideNoSshKey
     *
     * @return boolean
     */
    public function getHideNoSshKey()
    {
        return $this->hideNoSshKey;
    }

    /**
     * Set lastCredentialCheckAt
     *
     * @param \DateTime $lastCredentialCheckAt
     *
     * @return Users
     */
    public function setLastCredentialCheckAt($lastCredentialCheckAt)
    {
        $this->lastCredentialCheckAt = $lastCredentialCheckAt;

        return $this;
    }

    /**
     * Get lastCredentialCheckAt
     *
     * @return \DateTime
     */
    public function getLastCredentialCheckAt()
    {
        return $this->lastCredentialCheckAt;
    }

    /**
     * Set websiteUrl
     *
     * @param string $websiteUrl
     *
     * @return Users
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

