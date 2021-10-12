<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Builder, Model};

/** @mixin Builder */
class Employee extends Model
{
    use HasFactory;

	/**
	 * The connection name for the Employee.
	 *
	 * @var string|null
	 */
	protected $connection = 'external_database';

	/**
	 * The table associated with the Employee.
	 *
	 * @var string
	 */
	protected $table = 'employees'; // TODO: change table name

	/**
	 * The primary key associated with the table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'employee_id';

	/**
	 * Indicates if the Employee should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false; //TODO: I'll change it, if it is needed.
}
