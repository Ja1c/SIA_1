<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the 2 Service
     * @var string
     */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.user2.base_uri');
    }

    /**
     * Obtain the full list of users from User2 Site
     * @return string
     */
    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/users2');
    }
    /**
    * Create one user using the User2 service
    * @return string
    */
    public function createUser2($data)
    {
    return $this->performRequest('POST', '/users2', $data);
    }

    public function obtainUser2($id)
    {
        return $this->performRequest('GET', "/users2/{$id}");
    }

    public function editUser2($data, $id)
    {
    return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    public function delete($id)
    {
    return $this->performRequest('DELETE', "/users/{$id}");
    }
}
