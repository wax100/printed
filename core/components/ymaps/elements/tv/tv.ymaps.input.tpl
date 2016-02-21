<input id="tv{$tv->id}" name="tv{$tv->id}" class="textfield" value="{$tv->get('value')|escape}" readonly type = "text" style="width: 300px;float: left;margin-right: 30px;margin-bottom: 20px;"/> 

<p><span style="color:red; size:14px; font-weight:bold" id="help"></span></p>

<div>
    <input type="hidden" id="type" value="{$type}"/>
    <input id="address" type="textbox" value="{$address}" style="width:300px;">
    <input type="button" value="  НАЙТИ  " onclick="showAddress()">
</div>
<div id="map" style="width: 600px; height: 300px;"></div>
<script type="text/javascript">
    var id = "tv{$tv->id}";
    var str = document.getElementById(id).value;
    var num=0;
    var myMap, placemark, geoResult, bounds;
    var lat, lng;
    {literal}
    
    $(document).ready(function(){
        if ($('#map').length > 0){
            ymaps.ready(objectsMap);
        }
    });
    
    function objectsMap() {
        // если нет нчальных координат
        if (str == ''){
            //str = [ymaps.geolocation.latitude, ymaps.geolocation.longitude];
            lat = parseFloat(ymaps.geolocation.latitude);
            lng= parseFloat(ymaps.geolocation.longitude);
            $('#'+id).val(lat + ',' + lng);
            $('#address').val(lat + ',' + lng);
        }else{
            var latlngparts = str.split(",");
            lat = parseFloat(latlngparts[1]);
            lng = parseFloat(latlngparts[0]);
        }
        // Создание экземпляра карты и его привязка к контейнеру #myMap
        myMap = new ymaps.Map('map', {
            center: [lat, lng], // Москва
            zoom: 16,
        });
        
        // Кнопка изменения масштаба
        myMap.controls.add('zoomControl');
        
        myMap.setCenter([lat, lng]);
        myMap.setZoom(16);
        var myCollection = new ymaps.GeoObjectCollection();
        placemark = new ymaps.Placemark([lat, lng], {
            hasBalloon: false, 
            style: "default#houseIcon"
        }, {draggable: true});
        
        placemark.events.add('dragend', function (e) {
            var gp = placemark.geometry.getCoordinates();
            $('#'+id).val(gp[1] + ',' + gp[0]);
        });
        
        myCollection.add(placemark);
        myMap.geoObjects.add(myCollection);
        bounds = myMap.getBounds();
        if ($('#type').val() < 1 ){
            showAddress ();
        }
    }
    
    function showAddress () {
        var value = $("#address").val();
        //var geocoder = new ymaps.geocode(value, {results: 1/*, boundedBy: bounds*/});
        ymaps.geocode(value, {
            boundedBy: bounds, // Сортировка результатов от центра окна карты
            results: 1 // Если нужен только один результат, экономим трафик пользователей
            }).then(function (res) {
            // Выбираем первый результат геокодирования.
            var firstGeoObject = res.geoObjects.get(0),
            coords = firstGeoObject.geometry.getCoordinates(),// Координаты геообъекта.
            bounds2 = firstGeoObject.properties.get('boundedBy'); // Область видимости геообъекта.
            // Добавляем первый найденный геообъект на карту.
            placemark.geometry.setCoordinates(coords);
            myMap.setBounds(bounds2, {  });
            myMap.setZoom(16);
            myMap.setCenter(coords);
            var gp = placemark.geometry.getCoordinates();
            $('#'+id).val(gp[1] + ',' + gp[0]);
            MODx.fireResourceFormChange();
            return;
        });
    }
    
    // window.onload = initialize;
    {/literal}
</script>
