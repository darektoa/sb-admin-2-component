@php
    $transactionNav = [
        'Topup'   => url('/transactions') . '?type=1', 
        'Buying'  => url('/transactions') . '?type=2',
        'Refund'  => url('/transactions') . '?type=3',
    ];
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
    <x-sidebar.brand 
      img="{{ asset('assets/img/brand.png') }}"
      name="REXENSOFT"
      route="/dashboard" />
  
    <x-sidebar.divider />
  
    <x-sidebar.item
      active="{{ Request::is('dashboard') }}"
      icon="fa-gauge-high"
      name="Dashboard" 
      :route="url('/dashboard')" />
  
    <x-sidebar.collapse-item
      active="{{ Request::is('coins') }}"
      icon="fa-clipboard-list"
      name="Transactions"
      :routes="$transactionNav" />  
  
    <x-sidebar.divider mb="4"/>
    
    <x-sidebar.toggle/> 
  </ul>