<?php

namespace Vova07\Comments\Application\Commands;

use Vova07\Comments\Domain\Contracts\isRepository;

final class CreateComment implements Command
{
    /**
     * @var isRepository The repository instance
     */
    private $repository;

    /**
     * Constructor.
     *
     * @param isRepository $aRepository The repository instance
     */
    public function __construct(isRepository $aRepository)
    {
        $this->repository = $aRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
    }
}
