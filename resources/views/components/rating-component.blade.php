@if ($type)
<!-- medium or normal -->
<div class="my-3 mx-auto zeembirating">
  <input type="radio" name="rating-2" class="zeembimask zeembimask-star-2 bg-orange-400 mx-1" checked />
  <input
    type="radio"
    name="rating-2"
    class="zeembimask zeembimask-star-2 bg-orange-400 mx-1"/>
  <input type="radio" name="rating-2" class="zeembimask zeembimask-star-2 bg-orange-400 mx-1" />
  <input type="radio" name="rating-2" class="zeembimask zeembimask-star-2 bg-orange-400 mx-1" />
  <input type="radio" name="rating-2" class="zeembimask zeembimask-star-2 bg-orange-400 mx-1" />
</div>
@else
  <!-- xs -->
<div class="zeembirating zeembirating-xs">
  <input type="radio" name="rating-5" class="zeembimask zeembimask-star-2 bg-orange-400" dis/>
  <input
    type="radio"
    name="rating-5"
    class="zeembimask zeembimask-star-2 bg-orange-400"
dis    checked="checked" />
  <input type="radio" name="rating-5" class="zeembimask zeembimask-star-2 bg-orange-400" dis/>
  <input type="radio" name="rating-5" class="zeembimask zeembimask-star-2 bg-orange-400" dis/>
  <input type="radio" name="rating-5" class="zeembimask zeembimask-star-2 bg-orange-400" dis/>
</div>
@endif