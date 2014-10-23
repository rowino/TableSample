<?php

class HomeController extends BaseController
{

    protected $repository;

    public function __construct(App\Repositories\TableRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function showTable()
    {
        $data = $this->repository->getData();
        $headers = $this->repository->getHeaders($data);
        return View::make('table_example', ['headers' => $headers, 'data' => $data]);
    }

}
