<style>
  .catalog {
    display: grid;
    align-items: start;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    grid-column-gap: 2rem;
  }

  img {
    width: 100%;
  }
</style>


<section id="catalog" class="catalog box-x">

</section>


<script>
  const resData = @json($res['data']);

  function init(max) {
    let div = []
    for (let i = 0; i <= max; i++) {
      div.push('<div class="catalog__item box-y gap2">')
    }
    for (let i = 0, loop = 0; i < resData.length; i++, loop++) {
      div[loop] += `
          <img src="http://localhost:8000/api/image/${resData[i].image.id}" alt="${resData[i].name}">

      `
      console.log(loop)
      if (loop >= max) loop = -1
    }
    const catalog = document.getElementById('catalog')
    catalog.innerHTML = div[0] + '</div>' + div[1] + '</div>' + div[2] + '</div>'

  }

  init(2)
</script>



