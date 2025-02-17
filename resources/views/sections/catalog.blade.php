<style>
  .catalog__content {
    display: grid;
    align-items: start;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    grid-column-gap: 2rem;
  }

  .catalog__item {
    position: relative;
  }

  .catalog__item-info {
    background: linear-gradient(to top, rgba(0, 0, 0, .9), rgba(0, 0, 0, 0));
    width: 100%;
    height: 100%;
    padding: 1rem;
    position: absolute;
    bottom: 0;
    color: #fff;
  }

  .item__img {
    background-color: rgba(0, 0, 0, 0.1);
    min-height: 200px;
    width: 100%;
    border-radius: 5px;
  }
</style>


<section class="catalog box-y gap">
  @if(Request::is('catalog'))
    <div class="box-x gap">
      @include('components.button.orderBy', ['key'=>'views', 'value'=>'По популярности'])
      @include('components.button.orderBy', ['key'=>'price', 'value'=>'По цене'])
      @include('components.button.orderBy', ['key'=>'type', 'value'=>'По типу'])
      <div class="flex"></div>
    </div>
  @endif
  <div id="catalog-content" class="catalog__content box-x"></div>
</section>


<script type="module">
  import {title, price} from '{{ asset('assets/js/utilte/utilte.js') }}'

  const resData = @json($res['data']);

  function init(max) {
    let div = []
    for (let i = 0; i <= max; i++) {
      div.push('<div class="catalog__colum box-y gap2">')
    }
    for (let i = 0, loop = 0; i < resData.length; i++, loop++) {
      div[loop] += `
<a href="http://localhost:8000/catalog/${resData[i].id}" class="catalog__item box-y gap">
          <img class="item__img" src="http://localhost:8000/api/image/${resData[i].image.id}" alt="${resData[i].name}">
          <div class="catalog__item-info box-y gap">
          <div class="flex"></div>
<div class="box-x gap">
<b>
${title(resData[i].name)}
${resData[i].id}
${resData[i].type}
</b>
<b>
${price(resData[i].price)}
</b>
</div>
<div class="box-x">
${resData[i].description}
</div>
</div>
</a>
      `
      console.log(loop)
      if (loop >= max) loop = -1
    }
    const catalog = document.getElementById('catalog-content')
    catalog.innerHTML = div[0] + '</div>' + div[1] + '</div>' + div[2] + '</div>'
  }

  init(2)
</script>



