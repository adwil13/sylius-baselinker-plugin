<?php 
namespace Spinbits\SyliusBaselinkerPlugin\Repository;

use Doctrine\ORM\QueryBuilder;
use Spinbits\SyliusBaselinkerPlugin\Repository\BaseLinkerOrderRepositoryInterface;
use Spinbits\SyliusBaselinkerPlugin\Repository\OrdersRepositoryTrait;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository as BaseOrderRepository;

class OrderRepository extends BaseOrderRepository implements BaseLinkerOrderRepositoryInterface
{
    use OrdersRepositoryTrait;
}