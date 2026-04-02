import 'package:flutter/material.dart';

class MatchesScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Matched Profiles'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          children: [
            // Sample Data
            Expanded(
              child: ListView(
                children: [
                  _buildMatchedProfile('User 1', 'Match details for User 1'),
                  _buildMatchedProfile('User 2', 'Match details for User 2'),
                  _buildMatchedProfile('User 3', 'Match details for User 3'),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildMatchedProfile(String name, String details) {
    return Card(
      margin: EdgeInsets.symmetric(vertical: 8.0),
      child: ListTile(
        title: Text(name),
        subtitle: Text(details),
        trailing: Icon(Icons.chevron_right),
      ),
    );
  }
}