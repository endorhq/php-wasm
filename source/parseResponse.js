export const parseResponse = response => {
	// Implement headers as an array as a server might define
	// multiple headers with the same name (Ex. Set-Cookie). 
	const headers = [];
	const line = [];
	const decoder = new TextDecoder();

	let i = 0;

	for(; i < response.length; i++)
	{
		if(response[i] === 0xD && response[i+1] === 0xA) // We're at a CRLF
		{
			if(line.length)
			{
				const header = decoder.decode(new Uint8Array(line).buffer);
				const colon = header.indexOf(':');

				if(colon < 0)
				{
					headers.push([header, true]);
				}
				else
				{
					headers.push([header.substring(0, colon), header.substring(colon + 2)]);
				}

				line.length = 0;
				i++;
				continue;
			}
			else
			{
				i++;
				break;
			}
		}

		line.push(response[i]);
	}

	return {headers, body: new Uint8Array(response.slice(1+i)).buffer };
};
