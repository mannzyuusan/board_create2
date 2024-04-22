<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  // 配列内の要素を書き込み可能にする
  protected $fillable = ['post_id','user_id'];

  public function reply()
  {
    return $this->belongsTo(Reply::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
  /**
  * リプライにLIKEを付いているかの判定
  *
  * @return bool true:Likeがついてる false:Likeがついてない
  */
  public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }
  
  
  public function likes()
  {
    return $this->hasMany(Like::class, 'post_id');
  }
}