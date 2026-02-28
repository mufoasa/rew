
export default async function handler(req, res) {
  
  const ip = req.headers['x-forwarded-for'] || req.socket.remoteAddress;
  
  
  const userAgent = req.headers['user-agent'];
  
  
  const apiKey = process.env.CPA_API_KEY; 

  try {
    
    const response = await fetch(`https://confirmapp.store/api/v2?ip=${ip}&user_agent=${encodeURIComponent(userAgent)}`, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${apiKey}`
      }
    });

    const data = await response.json();
    
    
    res.status(200).json(data);
  } catch (error) {
    console.error('API Error:', error);
    res.status(500).json({ error: 'Failed to fetch offers' });
  }
}
