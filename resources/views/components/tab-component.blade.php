<div class="zeembicollapse bg-pre-dark-green">
  <input type="checkbox"/>
  <div class="zeembicollapse-title font-normal">
    View more product information

    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 0.5);transform: ;msFilter:;"><path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path></svg>
</div>
  <div class="zeembicollapse-content">
    
    {{-- Tab --}}
    <div role="tablist" class="zeembitabs zeembitabs-lifted">
      {{-- Specifications --}}
        <input type="radio" name="my_tabs_2" role="tab" class="w-auto zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]" aria-label="Specifications" checked="checked" />
        <div role="tabpanel" class="zeembitab-content bg-transparent rounded-sm border-slate-300 border-opacity-30 rounded-box p-6">
            {{ $specifications }}
        </div>
      
        {{-- Reviews --}}
        <input
          type="radio"
          name="my_tabs_2"
          role="tab"
          class="zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]"
          aria-label="Reviews" />
        <div role="tabpanel" class="zeembitab-content bg-transparent rounded-sm border-slate-300 border-opacity-30 rounded-box p-6">
          
            {{-- Messages --}}
            <x-review-component 
            :name="'Mg Mg'"
            :date="'15 May 2023'"
            :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quibusdam velit sed autem ea? Porro optio sit culpa repellat repellendus!'" 
            :avatar="null"
            />

            <div class="w-full p-1 sm:p-3 mt-2 sm:flex border border-white border-opacity-30 rounded-md">
              {{-- Avatar --}}
              <div>
                <div class="zeembiavatar zeembiplaceholder">
      
                  <div class="shrink-0 h-full me-3">
                    <div class="bg-neutral text-neutral-content w-12 h-12 rounded-full flex justify-center items-center">
                        {{-- @php
                            $fname = substr($name, 0, 1);
                        @endphp --}}
                        {{-- @if($avatar == null) --}}
                        <span class="text-2xl">K</span>
                        {{-- @else 
                        <img src="{{ config('app.url') }}/storage/{{ $avatar }}" alt="">
                        @endif --}}
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-1 h-full">
                <form action="" method="">
                  <span>
                    <svg class="inline-block" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>

                    reply to @Mg Mg
                  </span>
                  <textarea name="message" id="message" rows="5" placeholder="Please, enter your message here"
                    class="w-full h-full text-white p-3 rounded-md bg-white bg-opacity-10"
                  ></textarea>

                  <div class="w-full">
                    <button class="zeembibtn zeembibtn-success float-right">Reply</button>
                    <button class="zeembibtn zeembibtn-active zeembibtn-neutral mr-3 float-right">Cancle</button>
                  </div>
                  
                </form>
              </div>
              
            </div>
        </div>
      
        {{-- Shipping --}}
        <input type="radio" name="my_tabs_2" role="tab" class="zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]" aria-label="Shipping" />
        <div role="tabpanel" class="zeembitab-content bg-transparent rounded-sm border-slate-300 border-opacity-30 rounded-box p-6">
          {{ $shipping }}
        </div>
    </div>

  </div>
</div>