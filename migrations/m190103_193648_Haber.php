<?php

use yii\db\Migration;

/**
 * Class m190103_193648_Haber
 */
class m190103_193648_Haber extends Migration
{
   // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		
		$TABLE_NAME = 'HaberDeneme12';
        $this->createTable($TABLE_NAME, [
            'HaberID' => $this->integer(10)->notNull(),
            'Kategori' => $this->string(12)->notNull(),
            'Baslik' => $this->string(128)->notNull(),
            'Ozet' => $this->text()->notNull(),
            'Detay' => $this->text()->notNull(),
            'Resim' => $this->text()->notNull(),
            'EklenmeTarihi' => $this->date(),
            'GuncellenmeTarihi' => $this->date()
        ], $tableOptions);
		
		
		$TABLE_NAME = 'HaberKategoriDeneme12';
		 $this->createTable($TABLE_NAME, [
            'KategoriID' => $this->integer(10)->notNull(),
            'Kategori' => $this->string(20)->notNull()
        ], $tableOptions);
		
    }

    public function down()
    {
        //echo "m190103_185646_Haber cannot be reverted.\n";
        //return false;
		
		$TABLE_NAME = 'Haber';
        $this->dropTable($TABLE_NAME);
		
		$TABLE_NAME = 'HaberKategori';
        $this->dropTable($TABLE_NAME);
    }
}
