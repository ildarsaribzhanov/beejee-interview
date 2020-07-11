<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

/**
 * Class CrateTasksTable
 */
final class CrateTasksTable extends AbstractMigration
{
    /**
     *
     */
    public function up()
    {
        // create the table
        $table = $this->table('tasks');
        $table->addColumn('author_name', 'string')
            ->addColumn('author_email', 'string')
            ->addColumn('description', 'text')
            ->addColumn('status', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->table('tasks')->drop()->save();
    }
}
