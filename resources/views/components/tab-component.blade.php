<div class="zeembicollapse bg-pre-dark-green">
  <input type="checkbox"/>
  <div class="zeembicollapse-title text-xl font-medium">
    View more product information

    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 0.3);transform: ;msFilter:;"><path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path></svg>
</div>
  <div class="zeembicollapse-content">
    
    {{-- Tab --}}
    <div role="tablist" class="zeembitabs zeembitabs-lifted">
      {{-- Specifications --}}
        <input type="radio" name="my_tabs_2" role="tab" class="w-auto zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]" aria-label="Specifications" checked="checked" />
        <div role="tabpanel" class="zeembitab-content bg-transparent border-slate-300 border-opacity-30 rounded-box p-6">
            {{ $specifications }}
        </div>
      
        {{-- Reviews --}}
        <input
          type="radio"
          name="my_tabs_2"
          role="tab"
          class="zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]"
          aria-label="Reviews" />
        <div role="tabpanel" class="zeembitab-content bg-transparent border-slate-300 border-opacity-30 rounded-box p-6">
          
            {{-- Messages --}}
            <x-review-component 
            :name="'Mg Mg'"
            :date="'15 May 2023'"
            :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quibusdam velit sed autem ea? Porro optio sit culpa repellat repellendus!'" 
            :avatar="null"
            />

        </div>
      
        {{-- Shipping --}}
        <input type="radio" name="my_tabs_2" role="tab" class="zeembitab [--tab-bg:transparent] [--tab-border-color:slate-300]" aria-label="Shipping" />
        <div role="tabpanel" class="zeembitab-content bg-transparent border-slate-300 border-opacity-30 rounded-box p-6">
          {{ $shipping }}
        </div>
    </div>

  </div>
</div>