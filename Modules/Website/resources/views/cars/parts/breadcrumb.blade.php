    <div class="col-lg-12">
        <ul class="breadcrumb-list">
            <li>
                <a href="{{url('/')}}">{{__('lang.Home')}}</a>
            </li>
            @if($title_1)
            <li>
                @if(app()->getLocale() == 'ar')
                <i class="fa fa-angle-left"></i>
                @else
                <i class="fa fa-angle-right"></i>
                @endif
            </li>
            <li>
                <a href="#!" class="active">{{$title_1}}</a>
            </li>
            @endif

            @if($title_2)
            <li>
                @if(app()->getLocale() == 'ar')
                <i class="fa fa-angle-left"></i>
                @else
                <i class="fa fa-angle-right"></i>
                @endif  
              
            </li>
            <li>
                <a href="#!" class="active">{{$title_2}}</a>
            </li>
            @endif
            <li>
                <a href="#!" style="background: #E6F6FF;
    width: 24px;
    display: flex;
    height: 24px;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    position: relative;
    margin-left: 10px;
    border:1px solid rgba(0,0,0,0.10);
    top: 3px;
    font-size: 12pt;" class="go-back">
                    <i style="margin:0;color:black" class="fa fa-angle-left"></i>
                </a>
            </li>
        </ul>
    </div>

    @section('breadcrumbs')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
        [
            {
                "@type": "ListItem",
                "position": 1,
                "item":
                {
                    "@id": "{{url('/')}}",
                    "name": "Home"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item":
                {
                    "@id": "{{ url()->full() }}",
                    "name": "{{$title_1 ?? ''}}"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item":
                {
                    "@id": "{{ url()->full() }}",
                    "name": "{{$title_2 ?? ''}}"
                }
            }
        ]
    }
    </script>
    @endsection