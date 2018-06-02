<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_tag`.
 */
class m180512_130539_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
			'article_id' => $this->integer(),
			'tag_id' => $this->integer(),
        ]);
		
		$this->createIndex(
		 'idx-rag_id',
		 'article_tag',
		 'tag_id'
		 );
		 
		 $this->addForeignKey(
		  'fk-tag_id',
		  'article_tag',
		  'rag_id',
		  'tag',
		  'id',
		  'CASCADE'
		 );
		 
		 $this->createIndex(
		 'idx-rag_id',
		 'article_tag',
		 'tag_id'
		 );
		 
		 $this->addForeignKey(
		  'fk-tag_id',
		  'article_tag',
		  'rag_id',
		  'tag',
		  'id',
		  'CASCADE'
		 );
	
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article_tag');
    }
}
