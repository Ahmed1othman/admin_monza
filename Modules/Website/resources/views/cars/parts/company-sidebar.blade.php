<div class="sidebar">

    <div class="widget">
        <div class="widget__title">{{__('lang.Delivery Locations')}}</div>
        <div class="widget__content">
            <ul>
                @foreach($company->cities as $city)
                    <li>
                        <a href="{{url('/')}}/l/{{$city->id}}/{{$city->slug()}}?company_id={{$company->id}}">
                            <i class="fa fa-check"></i> {{$city->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @if(count($company->hours()->where('type','!=','')->get()) > 0)
    <div class="widget">
        <div class="widget__title">{{__('lang.Our opening hours & days')}}</div>
        <div class="widget__content hours_content">
            <ul>
                @foreach($company->hours()->where('type','!=','')->get() as $hour)
                    <li>
                        <a href="#!">
                            <i class="fa fa-check"></i> 
                            <div>
                                {{__('admin.' . $hour->day)}} 
                                @if($hour->type == 'open')
                                @if($hour->time_from && $hour->time_to)
                                <span>{{__('admin.from')}} {{$hour->time_from->format('H:iA')}} {{__('admin.to')}} {{$hour->time_to->format('H:iA')}}</span>
                                @endif
                                @elseif($hour->type == '24')
                                {{__('admin.24')}}
                                @elseif($hour->type == 'holiday')
                                {{__('admin.holiday')}}
                                @endif
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    @if(count($company->brands()) > 0)
    <div class="widget">
        <div class="widget__title">{{__('lang.Our Brands')}}</div>
        <div class="widget__content hours_content">
            <ul>
                @foreach($company->brands() as $brand)
                    <li>
                        <a href="{{url('/')}}/b/{{$brand->sync_id}}/{{$brand->slug()}}?company_id={{$company->id}}">
                            <i class="fa fa-check"></i> 
                            {{$brand->title}} ({{$company->cars()->where('brand_id',$brand->id)->count()}})
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="widget">
        <div class="widget__title">{{__('lang.Our Car Types')}}</div>
        <div class="widget__content hours_content">
            <ul>
                @foreach($company->types as $type)
                    <li>
                        <a href="{{url('/')}}/t/{{$type->sync_id}}/{{$type->slug()}}?company_id={{$company->id}}">
                            <i class="fa fa-check"></i> 
                            {{$type->title}} ({{$company->getCarsCountInType($type->id)}})
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>  

    @if (strpos($company->address, '<iframe') !== false)

    <div class="widget widget__map">
        <div class="widget__title">{{__('lang.Our Office Location')}}</div>
        <div class="widget__content hours_content">
           {!!$company->address!!}
        </div>
    </div>
    @endif

</div>



