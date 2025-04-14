<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\CourseStatus;

class Course extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'level_id',
        'category_id',
        'price_id',
        'title',
        'slug',
        'summary',
        'description',
        'status',
        'image_path',
        'video_path',
        'welcome_message',
        'goodbye_message',
        'observation'
    ];

    protected $casts = [
        # Checks if is a valid value in this enum.
        'status' => CourseStatus::class
    ];

    /**
     * Get the user (teacher) that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the level that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    /**
     * Get the price that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }
}
