<?php

namespace App\Helpers;

class FormatHelper
{
    public function document(string $value): string
    {
        $number = preg_replace('/\D/', '', $value);

        if (strlen($number) === 11) {
            return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $number);
        }

        if (strlen($number) === 14) {
            return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $number);
        }

        return $value;
    }

    public function phone(string $phone): string
    {
        $number = preg_replace('/\D/', '', $phone);

        if (strlen($number) > 11) {
            $number = substr($number, -11);
        }

        if (strlen($number) === 11) {
            return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $number);
        }

        if (strlen($number) === 10) {
            return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $number);
        }

        if (strlen($number) === 9) {
            return preg_replace('/(\d{5})(\d{4})/', '$1-$2', $number);
        }

        if (strlen($number) === 8) {
            return preg_replace('/(\d{4})(\d{4})/', '$1-$2', $number);
        }

        return $number;
    }

    public function cep(string $cep): string
    {
        $number = preg_replace('/\D/', '', $cep);

        if (strlen($number) === 8) {
            return preg_replace('/(\d{5})(\d{3})/', '$1-$2', $number);
        }

        return $cep;
    }

    public function money(float|string $value): string
    {
        return 'R$ ' . number_format((float)$value, 2, ',', '.');
    }

    public function date(string $value): string
    {
        return date('Y-m-d', strtotime($value));
    }
}
