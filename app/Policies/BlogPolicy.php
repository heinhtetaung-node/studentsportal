<?php

namespace App\Policies;
use App\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function create()
    {
        return true;
    }

    public function destroy(User $user,Blog $blog)
    {
        return $user->id===$blog->student_id;
    }
}
