<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweetMention2 extends Migration
{
    public function up()
    {
        Schema::table('tcom_tweets_tweet_mention', function($table)
        {
            $table->dropPrimary(['tweet_id','mentions_id']);
            $table->renameColumn('mentions_id', 'mention_id');
            $table->primary(['tweet_id','mention_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tcom_tweets_tweet_mention', function($table)
        {
            $table->dropPrimary(['tweet_id','mention_id']);
            $table->renameColumn('mention_id', 'mentions_id');
            $table->primary(['tweet_id','mentions_id']);
        });
    }
}
