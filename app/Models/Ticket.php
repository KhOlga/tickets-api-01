<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Builder, Model};

/** @mixin Builder */
class Ticket extends Model
{
    use HasFactory;

	/**
	 * The connection name for the Ticket.
	 *
	 * @var string|null
	 */
	protected $connection = 'external_database';

	/**
	 * The table associated with the Ticket.
	 *
	 * @var string
	 */
	protected $table = 'tickets'; // TODO: change table name to the actually table name

	/**
	 * The primary key associated with the table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'ticket_id'; // TODO: change the primary key name to the actually primary key name

	/**
	 * Indicates if the Ticket should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false; //TODO: I'll change it, if it is needed.

	//TODO: add table's name from main application,
	//TODO: make database connection to the 3-d database
}
