    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [7.83845, 98.29922],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 15,
            controls:['fullscreenControl','zoomControl']
        });
        var glyphIcon2 = new ymaps.Placemark([7.8382, 98.2988], {}, {
          preset: 'islands#glyphCircleIcon', 
          iconGlyph: 'home',
          iconGlyphColor: 'blue',
        }); 
        myMap.geoObjects.add(glyphIcon2);
    }
