<?php

namespace Luchavez\SimpleSecrets\Events\Secret;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Queue\SerializesModels;
use Luchavez\SimpleSecrets\Models\Secret;

/**
 * Class SecretCreatedEvent
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class SecretCreatedEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public Secret|Collection|LengthAwarePaginator|Paginator $secret)
    {
        //
    }
}
