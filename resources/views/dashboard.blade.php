@extends('template')

@section('content')
<div class="right-content">
    <h3>Dashboard</h3>
    <div class="square-content">
        <div class="square square-1">
            <span class="order-amount">0</span>
            <span class="order-span order-title">Pedidos</span>
            <span class="order-span order-status">Entregues</span>
        </div>
        <div class="square square-2">
            <span class="order-amount">0</span>
            <span class="order-span order-title">Pedidos</span>
            <span class="order-span order-status">Embalando</span>
        </div>
        <div class="square square-3">
            <span class="order-amount">0</span>
            <span class="order-span order-title">Pedidos</span>
            <span class="order-span order-status">Enviando</span>
        </div>
        <div class="square square-4">
            <span class="order-amount">0</span>
            <span class="order-span order-title">Pedidos</span>
            <span class="order-span order-status">Entregando</span>
        </div>
    </div>
</div>
@endsection