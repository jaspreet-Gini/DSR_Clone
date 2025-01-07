<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Dsr;
use Authorization\IdentityInterface;

/**
 * Dsr policy
 */
class DsrPolicy
{
    /**
     * Check if $user can add Dsr
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dsr $dsr
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Dsr $dsr)
    {
        return true;
    }

    /**
     * Check if $user can edit Dsr
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dsr $dsr
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Dsr $dsr)
    {
        return $this->isAuthor($user, $dsr);
    }

    /**
     * Check if $user can delete Dsr
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dsr $dsr
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Dsr $dsr)
    {
        return $this->isAuthor($user, $dsr);
    }

    /**
     * Check if $user can view Dsr
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Dsr $dsr
     * @return bool
     */
    public function canView(IdentityInterface $user, Dsr $dsr)
    {
        // return $dsr->user_id === $user->id;
        return $dsr->user_id === $user->getIdentifier();
    }
}
