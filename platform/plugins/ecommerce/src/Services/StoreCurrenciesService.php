<?php

namespace Botble\Ecommerce\Services;

use Botble\Ecommerce\Repositories\Eloquent\CurrencyRepository;
use Botble\Ecommerce\Repositories\Interfaces\CurrencyInterface;
use Exception;

class StoreCurrenciesService
{
    /**
     * @var CurrencyRepository
     */
    protected $currencyRepository;

    /**
     * StoreCurrenciesService constructor.
     * @param CurrencyInterface $currency
     */
    public function __construct(CurrencyInterface $currency)
    {
        $this->currencyRepository = $currency;
    }

    /**
     * @param array $currencies
     * @param array $deletedCurrencies
     * @throws Exception
     */
    public function execute(array $currencies, array $deletedCurrencies)
    {
        if ($deletedCurrencies) {
            $this->currencyRepository->deleteBy([
                ['id', 'IN', $deletedCurrencies],
            ]);
        }

        foreach ($currencies as $item) {
            if (!$item['title'] || !$item['symbol']) {
                continue;
            }

            $item['title'] = substr(strtoupper($item['title']), 0, 3);
            $item['decimals'] = (int) $item['decimals'];

            $currency = $this->currencyRepository->findById($item['id']);
            if (!$currency) {
                $this->currencyRepository->create($item);
            } else {
                $currency->fill($item);
                $this->currencyRepository->createOrUpdate($currency);
            }
        }
    }
}
