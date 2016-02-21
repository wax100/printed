ymaps.ready(init);

function init () {

    var explode = function ( delimiter, string ) {	// Split a string by string
		
		var emptyArray = { 0: '' };
		
		if ( arguments.length != 2 || typeof arguments[0] == 'undefined' || typeof arguments[1] == 'undefined'){
			return null;
		}
		
		if ( delimiter === '' || delimiter === false || delimiter === null ){
			return false;
		}
		
		if ( typeof delimiter == 'function' || typeof delimiter == 'object'
		|| typeof string == 'function' || typeof string == 'object' ){
			return emptyArray;
		}
		
		if ( delimiter === true ) {
			delimiter = '1';
		}
		return string.toString().split ( delimiter.toString() );
	}
	
    var coords = explode(',', global['coords']);
    
    var myMap = new ymaps.Map("map", {
            center: [coords[1], coords[0]],
            zoom: true,
            controls: ['zoomControl'],
            restrictMapArea: true
        }),

    // Создаем геообъект с типом геометрии "Точка".
    myGeoObject = new ymaps.GeoObject({
        // Описание геометрии.
        geometry: {
            type: "Point",
            coordinates: [coords[1], coords[0]],
			name: global['address'],
			style:"twirl#blueDotIcon"
        },
        // Свойства.
        properties: {
            // Контент метки.
            iconContent: global['title'],
            hintContent: global['address'],
        }
    }, {
        // Опции.
        // Иконка метки будет растягиваться под размер ее содержимого.
        preset: 'islands#blueStretchyIcon',
        // Метку можно перемещать.
        draggable: false,
        hasBalloon: true
    });
    
    myMap.geoObjects.add(myGeoObject);
    myMap.behaviors.disable('scrollZoom');
        
   //var bounds = myMap.geoObjects.getBounds();
//	myMap.setBounds(bounds);     
	var oldZoom = myMap.getZoom();
    myMap.setZoom(17);
}