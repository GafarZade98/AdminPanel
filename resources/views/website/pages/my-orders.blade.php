@extends('website.pages.account')
@section('title', trans('website.general.my_orders'))

@section('my-account')
    <div class="col-md-8">
        <div class="card mb-3">
          <table class="table table-responsive">
              <thead>
                <tr>
                    <th scope="col">@lang('admin.columns.ordering')</th>
                    <th scope="col">@lang('admin.columns.code')</th>
                    <th scope="col">@lang('admin.columns.amount')</th>
                    <th scope="col">@lang('admin.columns.status')</th>
                    <th scope="col">@lang('admin.buttons.remove')</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($orders as $order)
                      <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->getAttribute('code')}}</td>
                            <td>{{$order->getAttribute('amount')}}</td>
                            <td>@lang('admin.order.status.' . $order->getAttribute('status'))</td>
                            <td>
                                @if(optional($order)->getAttribute('status') < 2)
                                    <a href="{{route('orders.delete', $order->id)}}" onclick="event.preventDefault(); document.getElementById('delete').submit();">
                                        <form id="delete" action="{{ route('orders.delete', $order->id) }}" method="POST" class="d-none">
                                            @csrf @method('DELETE')
                                        </form>
                                        @lang('admin.buttons.remove')</a>
                                @endif
                            </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>
@endsection

