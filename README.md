# ServerNotify

ServerNotify is a web-based tool designed to allow users to send preset messages to multiple servers simultaneously. This simple yet powerful tool can be used for system administrators or anyone who needs to send predefined messages to various servers quickly and efficiently.

## Features

- **Multiple Server Support**: Allows you to manage and send messages to multiple servers simultaneously.
- **Preset Messages**: Users can choose from a variety of preset messages.
- **Dynamic Message Updates**: Ability to update message content for all selected servers via the web interface.
- **Customizable Server Count**: The number of servers can be dynamically adjusted based on user preference.

## Installation

### Step 1: Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/your-username/ServerNotify.git
```
### Step 2: Setup the Server
Open the project folder and configure the server by setting the appropriate number of servers and default message settings in the index.php file.
Configure the Nginx server to serve the application. The future updates will include detailed steps for configuring Nginx.

### Step 3: Open the Web Interface
Open index.php in your browser to see the interface for sending messages to the servers.
Select a preset message and adjust the number of servers to manage.
The message will be updated for each server dynamically.

## Future Updates
Nginx Server Configuration: We are working on adding instructions for setting up Nginx as a reverse proxy for this application.
Enhanced Message Management: Future versions will offer more advanced features for managing and scheduling messages across servers.

## Contact
For any questions or feedback, feel free to open an issue in the GitHub repository.

