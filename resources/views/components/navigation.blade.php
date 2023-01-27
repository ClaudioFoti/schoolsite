<div class="bg-[#ffffff] h-[60px] fixed w-full flex items-center justify-between px-5 border-b-[#dddddd] border-b-[1px]">
    <div class="text-[#0066ff] text-[24px] font-bold flex items-center gap-[10px]">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.05 2.53001L4.03002 6.46001C2.10002 7.72001 2.10002 10.54 4.03002 11.8L10.05 15.73C11.13 16.44 12.91 16.44 13.99 15.73L19.98 11.8C21.9 10.54 21.9 7.73001 19.98 6.47001L13.99 2.54001C12.91 1.82001 11.13 1.82001 10.05 2.53001Z" stroke="#0066FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5.63 13.08L5.62 17.77C5.62 19.04 6.6 20.4 7.8 20.8L10.99 21.86C11.54 22.04 12.45 22.04 13.01 21.86L16.2 20.8C17.4 20.4 18.38 19.04 18.38 17.77V13.13M21.4 15V9" stroke="#0066FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        {{$tenant->name}}
    </div>
    <div class="mainlinks">
        <div class="flex items-center gap-[24px]">
            <div class="text-[#0066ff] text-[16px] ">
                <a href="#">Classes</a>
            </div>
            <div class="text-[#0066ff] text-[16px] ">
                <a href="{{route('blogs.index')}}">Blog</a>
            </div>
            <div class="text-[#0066ff] text-[16px] ">
                <a href="#">Info</a>
            </div>
        </div>
    </div>
    <div class="">
        @if (Route::has('login'))
            <div class="flex gap-[16px] items-center">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class=" text-[#0066ff] ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">
                            <button class="bg-[#0066ff] text-[#ffffff] text-[16px] px-[24px] h-[40px] rounded-[4px]">
                                Sign up
                            </button>
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
<div class="h-[60px] hoh w-full">

</div>

<style>
    @media (max-width: 768px) {
        .mainlinks{
            position: fixed;
            top: 60px;
            background: white;
            width: 100%;
            padding-bottom: 10px;
            padding-top: 10px;
            border-bottom: #dddddd 1px solid;
            left: 0;
            padding-left: 20px;
        }
        .hoh{
            height:105px;
        }
    }
</style>
