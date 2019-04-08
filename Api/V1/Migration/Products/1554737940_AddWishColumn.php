<?php

use Migratio\Contract\MigrationContract;
use Migratio\Contract\SchemaCapsuleContract as Schema;
use Migratio\Contract\WizardAlterGroupContract as Wizard;

class AddWishColumn implements MigrationContract
{
    /**
     * Run the migrations.
     *
     * @param Schema $schema
     * @return mixed
     */
    public function up(Schema $schema)
    {
        return $schema->alter(function(Wizard $wizard){

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
