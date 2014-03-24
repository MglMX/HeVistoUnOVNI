import 'dart:html';

void main() {
  querySelector("#sample_text_id")
      ..text = "|Click aqui para volver a inicio...|"
      ..onClick.listen(volver);
}

void volver(MouseEvent event) {

  window.location.href = '../hevistounovni';
}
