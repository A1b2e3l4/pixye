import 'package:flutter/material.dart';
import 'package:pixye/config/some_config.dart';
import 'package:pixye/providers/some_provider.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Pixye App',
      home: Scaffold(
        appBar: AppBar(
          title: Text('Welcome to Pixye'),
        ),
        body: Center(
          child: Text('Hello, world!'),
        ),
      ),
    );
  }
}