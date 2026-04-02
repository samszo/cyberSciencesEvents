<?php

class StyloGraphQLClient
{
    private string $endpoint = 'https://stylo.huma-num.fr/graphql';
    private ?string $token = null;

    public function __construct(?string $token = null)
    {
        $this->token = $token;
    }

    public function query(string $query, array $variables = []): array
    {
        $payload = [
            'query' => $query,
            'variables' => $variables
        ];

        $response = $this->request($payload);
        return $response;
    }

    public function mutation(string $mutation, array $variables = []): array
    {
        $payload = [
            'query' => $mutation,
            'variables' => $variables
        ];

        $response = $this->request($payload);
        return $response;
    }

    public function createArticle(array $prop): array
    {
        $payload = [
            'query' => $mutation,
            'variables' => $variables
        ];

        $response = $this->request($payload);
        return $response;
    }

    

    private function request(array $payload): array
    {
        $ch = curl_init($this->endpoint);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $this->getHeaders(),
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($payload)
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new Exception("GraphQL request failed with status $httpCode");
        }

        return json_decode($response, true);
    }

    private function getHeaders(): array
    {
        $headers = [
            'Content-Type: application/json'
        ];

        if ($this->token) {
            $headers[] = "Authorization: Bearer {$this->token}";
        }

        return $headers;
    }
}