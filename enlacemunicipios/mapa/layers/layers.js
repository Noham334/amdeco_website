var wms_layers = [];

        var lyr_imagen1_0 = new ol.layer.Tile({
            'title': 'imagen1_0',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: '<a href=""></a>',
                url: 'http://a.tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });var format_regiones_1 = new ol.format.GeoJSON();
var features_regiones_1 = format_regiones_1.readFeatures(json_regiones_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_regiones_1 = new ol.source.Vector({
    attributions: '<a href=""></a>',
});
jsonSource_regiones_1.addFeatures(features_regiones_1);var lyr_regiones_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_regiones_1, 
                style: style_regiones_1,
    title: 'regiones<br />\
    <img src="styles/legend/regiones_1_0.png" /> ANDINA<br />\
    <img src="styles/legend/regiones_1_1.png" /> CONO SUR<br />\
    <img src="styles/legend/regiones_1_2.png" /> METROPOLITANA<br />\
    <img src="styles/legend/regiones_1_3.png" /> TROPICO<br />\
    <img src="styles/legend/regiones_1_4.png" /> VALLES<br />\
    <img src="styles/legend/regiones_1_5.png" /> <br />'
        });

lyr_imagen1_0.setVisible(true);lyr_regiones_1.setVisible(true);
var layersList = [lyr_imagen1_0,lyr_regiones_1];
lyr_regiones_1.set('fieldAliases', {'gid': 'gid', 'region': 'region', });
lyr_regiones_1.set('fieldImages', {'gid': 'TextEdit', 'region': 'TextEdit', });
lyr_regiones_1.set('fieldLabels', {'gid': 'no label', 'region': 'no label', });
lyr_regiones_1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});