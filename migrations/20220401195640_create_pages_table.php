<?php

declare(strict_types=1);

use Phoenix\Migration\AbstractMigration;

final class CreatePagesTable extends AbstractMigration
{
    protected function up(): void
    {
        $this->table('pages')
            ->addColumn('created', 'timestamp')
            ->addColumn('updated', 'timestamp', ['null' => true])
            ->addColumn('slug', 'string')
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->create();
    }

    protected function down(): void
    {
        $this->table('pages')
            ->drop();        
    }
}
