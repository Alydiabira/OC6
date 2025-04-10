<?php

namespace App\Entity;

use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;
use DateTimeInterface;

class ResetPasswordRequest implements ResetPasswordRequestInterface
{
    private $user;
    private $expiresAt;
    private $selector;
    private $hashedToken;
    private $requestedAt; // La date de la demande

    // Getter et setter pour $user
    public function getUser(): object
    {
        return $this->user;
    }

    public function setUser(object $user): self
    {
        $this->user = $user;
        return $this;
    }

    // Getter et setter pour $expiresAt
    public function getExpiresAt(): DateTimeInterface
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(DateTimeInterface $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    // Getter et setter pour $selector
    public function getSelector(): string
    {
        return $this->selector;
    }

    public function setSelector(string $selector): self
    {
        $this->selector = $selector;
        return $this;
    }

    // Getter et setter pour $hashedToken
    public function getHashedToken(): string
    {
        return $this->hashedToken;
    }

    public function setHashedToken(string $hashedToken): self
    {
        $this->hashedToken = $hashedToken;
        return $this;
    }

    // Implémentation de getRequestedAt() : retourne la date de la demande
    public function getRequestedAt(): DateTimeInterface
    {
        return $this->requestedAt;
    }

    // Setter pour la date de la demande
    public function setRequestedAt(DateTimeInterface $requestedAt): self
    {
        $this->requestedAt = $requestedAt;
        return $this;
    }

    // Implémentation de isExpired() : vérifie si la demande a expiré
    public function isExpired(): bool
    {
        return $this->expiresAt < new \DateTime(); // Si la date d'expiration est passée, la demande est expirée
    }
}
