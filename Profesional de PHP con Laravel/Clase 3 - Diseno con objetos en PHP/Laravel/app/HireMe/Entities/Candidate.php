<?php namespace HireMe\Entities;

class Candidate extends \Eloquent {
	protected $fillable = ['website_url', 'job_type', 'description', 'category_id', 'available'];
	protected $perPage = 3;

	public function user()
	{
		return $this->hasOne('HireMe\Entities\User', 'id', 'id');
	}

	public function category()
	{
		return $this->belongsTo('HireMe\Entities\Category');
	}

	public function getJobTypeTitleAttribute()
	{
		return \Lang::get('utils.job_types.' . $this->job_type);
	}

}