import 'package:polymer/polymer.dart';
import 'dart:html';

/**
 * A Polymer click counter element.
 */
@CustomTag('coger-ovni')
class ClickCounter extends PolymerElement {
  @published String latitud;
  @published String longitud;
  
  ClickCounter.created() : super.created() {
    Geoposition startPosition;
    String calle;
    window.navigator.geolocation.getCurrentPosition()
    .then((Geoposition position) {
      startPosition = position;
      latitud="${startPosition.coords.latitude}";
      longitud="${startPosition.coords.longitude}";

    });
  }

}
