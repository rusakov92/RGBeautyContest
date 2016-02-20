<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * @var integer
     */
    const MAX_VOTES = 7;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token', 'created_at', 'updated_at'];

    /**
     * Check if we have user with those credentials.
     *
     * @param array $credentials
     * @return User|null
     */
    public static function validate(array $credentials)
    {
        return static::where('name', $credentials['name'])->first();
    }

    /**
     * Make many-to-many relations with beauty_queens table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function votes()
    {
        return $this->belongsToMany('App\BeautyQueen', 'votes');
    }

    /**
     * Number of votes the user give.
     *
     * @return int
     */
    public function votesGiven()
    {
        return $this->votes->count();
    }

    /**
     * Check if user has more then the maximum votes.
     *
     * @return bool
     */
    public function canVote()
    {
        return $this->votesGiven() <= self::MAX_VOTES;
    }

    /**
     * Register a new vote.
     *
     * @param array $queenIds
     * @return boolean
     */
    public function makeVote(array $queenIds)
    {
        if ($this->canVote() && ! $this->hasVoted()) {
            $this->votes()->sync($queenIds);
        }
    }

    /**
     * Fetch all of the given votes for the logged user.
     *
     * @return array
     */
    public function fetchAllVotesForUser()
    {
        $votes = $this->votes->toArray();

        foreach ($votes as &$vote) {
            unset($vote['pivot']);
        }

        return $votes;
    }

    /**
     * Returns only the ids of the user's votes.
     *
     * @return array
     */
    public function giveMeOnlyVoteIds()
    {
        $allVotes = $this->fetchAllVotesForUser();

        $voteIds = [];
        foreach ($allVotes as $vote) {
            $voteIds[] = $vote['id'];
        }

        return $voteIds;
    }

    /**
     * Determent if user voted already.
     *
     * @return bool
     */
    public function hasVoted()
    {
        return $this->votesGiven() > 0;
    }
}
