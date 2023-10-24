let client, channel, username;

async function generateToken(username) {
  const { token } = (
    await axios.get(`/server.php?create-token=${username}`)
  ).data;
  return token;
}

// Initialize the JavaScript chat SDK
client = new StreamChat('<STREAM_APP_KEY>');