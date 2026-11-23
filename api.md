# CodeJackRabbit PHP API

<!-- omniwrap-api-reference eyJjb250cmFjdF9maW5nZXJwcmludCI6ImIwNjc4MWEyNmM0NDY5ZThmMTI4MzBhMDRkNDU1OTU3YmY2MjBkNDJiOWUxZGYxNTVlOTNlZTAwZjI5M2QxYzkiLCJvcGVyYXRpb25fY291bnQiOjI4LCJyZW5kZXJlciI6InBocCIsInZlcnNpb24iOiIxLjUuMCJ9 -->

This generated index is tied to Semantic IR `1.14.0` and contract fingerprint `b06781a26c4469e8f12830a04d455957bf620d42b9e1df155e93ee00f293d1c9`. Every operation below is rendered from the same semantic contract and artifact-attested public member allocation as the SDK.

SDK maturity: **experimental**  
Artifact evidence: [`omniwrap-artifact.json`](omniwrap-artifact.json) binds this file by SHA-256 and is revalidated by the package gate.

## Shared types

- `AuditContextRequest`
- `AuditSnapshotsRequest`
- `ComplianceGateRequest`
- `DeveloperAuditRequest`
- `DeveloperEvidenceRequest`
- `FileChange`
- `FinOpsRequest`
- `ManagedDeveloperIdentity`
- `ManagedDeveloperIdentityRequest`
- `ReviewRequest`
- `WaitlistRequest`

## Resource `analysis`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJhbmFseXplQ29udHJhY3REcmlmdCIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJhbmFseXplQ29udHJhY3REcmlmdCIsInBhdGgiOiIvdjEvYW5hbHlzaXMvY29udHJhY3QtZHJpZnQiLCJyZXNvdXJjZSI6ImFuYWx5c2lzIiwic2VjdGlvbl9zaGEyNTYiOiI5YmQ3NDY2MWYxODA4MGI5N2RjM2JhNzIyYTFiMzJmMTA0OGYxNDkzZTU1ZjE0YjI4MzAzMTNjNTM2YmYxMWQyIiwic2lnbmF0dXJlX3NoYTI1NiI6ImZkM2FmNTM0NjIxNmUzMjVhNWQxZTQ0MTk0NzVhMTA1M2ExNDRjM2UxMmU5YWEzZjgwMWQ0Y2QxY2YzOWY1NDMifQ -->
### `client.analyzeContractDrift`

Operation ID: `analyzeContractDrift`  
Route: `POST` `/v1/analysis/contract-drift`  

#### Signature

```php
public function analyzeContractDrift(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Contract drift report and SemVer recommendation | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJhbmFseXplQ29udHJhY3REcmlmdCJ9 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJhbmFseXplUGVyZkZpbk9wcyIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJhbmFseXplUGVyZkZpbk9wcyIsInBhdGgiOiIvdjEvYW5hbHlzaXMvcGVyZi1maW5vcHMiLCJyZXNvdXJjZSI6ImFuYWx5c2lzIiwic2VjdGlvbl9zaGEyNTYiOiI5ZTlkY2EzNDBkZjIyNzhlYTg1YjRkZGUyYzRhMzdmM2VlZGU5MjBlODM4NzAxZDZmNzFlMjg1MDA1MjE4ZmQ3Iiwic2lnbmF0dXJlX3NoYTI1NiI6IjI2NjA5OWYwMjMxYTA3N2E3OWNiODI4MDJhMmVmNDdjZWQ0NDYzMTliZTI5NDA1ZjA0ZmQyZDBkM2VlOGYyMWQifQ -->
### `client.analyzePerfFinOps`

Operation ID: `analyzePerfFinOps`  
Route: `POST` `/v1/analysis/perf-finops`  

#### Signature

```php
public function analyzePerfFinOps(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Performance and FinOps audit report | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJhbmFseXplUGVyZkZpbk9wcyJ9 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJwbGFuU3RhY2tlZFByU3BsaXQiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoicGxhblN0YWNrZWRQclNwbGl0IiwicGF0aCI6Ii92MS9hbmFseXNpcy9zcGxpdC1wciIsInJlc291cmNlIjoiYW5hbHlzaXMiLCJzZWN0aW9uX3NoYTI1NiI6ImViZWZlYWQ3NGVmNDQxMjBlNGY1Zjk2MDAzZmRlOTEzYTcwMWIwYjAyMTFhMTEzMWJlNjE5NDQ3YzMwMjQ1MWYiLCJzaWduYXR1cmVfc2hhMjU2IjoiOTcwMTY3YTNhMjEyMTliNDk0ZWM5NjU3OTRjYTQ3Y2IzY2IxMjAyMWRmMjUxODNjNjJmM2EwYzU1MDAwZmRkMyJ9 -->
### `client.planStackedPrSplit`

Operation ID: `planStackedPrSplit`  
Route: `POST` `/v1/analysis/split-pr`  

#### Signature

```php
public function planStackedPrSplit(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Ordered stacked PR plan and git commands | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJwbGFuU3RhY2tlZFByU3BsaXQifQ -->

## Resource `analytics`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZXRBbmFseXRpY3NSb2kiLCJtZXRob2QiOiJHRVQiLCJvcGVyYXRpb25faWQiOiJnZXRBbmFseXRpY3NSb2kiLCJwYXRoIjoiL3YxL2FuYWx5dGljcy9yb2kiLCJyZXNvdXJjZSI6ImFuYWx5dGljcyIsInNlY3Rpb25fc2hhMjU2IjoiNWQ1MGJlYmUyZjhkZGY5MjM2ZjkyYThlYzJkZWVkMzBjOTk3OGY2YmM2MGNjZDhlYTNkZDZlYzBhNjQ1MGQ0MyIsInNpZ25hdHVyZV9zaGEyNTYiOiJkODkwOGUzNWU1M2JmNmQ1MjljYzVjMTE0OWE4ZDI4MGMyZjFmNmE5YjVmOTRlMDVmMTI1NGZlMzI0OGE1ZTEwIn0 -->
### `client.getAnalyticsRoi`

Operation ID: `getAnalyticsRoi`  
Route: `GET` `/v1/analytics/roi`  

#### Signature

```php
public function getAnalyticsRoi(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | ROI telemetry summary | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZXRBbmFseXRpY3NSb2kifQ -->

## Resource `capabilities`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZXRDYXBhYmlsaXRpZXMiLCJtZXRob2QiOiJHRVQiLCJvcGVyYXRpb25faWQiOiJnZXRDYXBhYmlsaXRpZXMiLCJwYXRoIjoiL3YxL2NhcGFiaWxpdGllcyIsInJlc291cmNlIjoiY2FwYWJpbGl0aWVzIiwic2VjdGlvbl9zaGEyNTYiOiI5MzFhN2YyYWFkMmY3YWFmMjNjY2I4ZjlmOTYwYzIwMDhjM2EyOWFlNDhiOWQ5NTZmYWQyZDk0Y2QwZjZhZTQzIiwic2lnbmF0dXJlX3NoYTI1NiI6ImNjMTQyODI2NGEwZmU2MTM0ZWI2OGIyMDMxMjE5NTlmNGQ0MzhkMTNjZmVjZDJmZDk4OTY4MDU4MWM2YTg1NDUifQ -->
### `client.getCapabilities`

Operation ID: `getCapabilities`  
Route: `GET` `/v1/capabilities`  

#### Signature

```php
public function getCapabilities(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Capabilities catalog | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZXRDYXBhYmlsaXRpZXMifQ -->

## Resource `compliance`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJldmFsdWF0ZUNvbXBsaWFuY2VHYXRlIiwibWV0aG9kIjoiUE9TVCIsIm9wZXJhdGlvbl9pZCI6ImV2YWx1YXRlQ29tcGxpYW5jZUdhdGUiLCJwYXRoIjoiL3YxL2NvbXBsaWFuY2UvZ2F0ZSIsInJlc291cmNlIjoiY29tcGxpYW5jZSIsInNlY3Rpb25fc2hhMjU2IjoiOWQ4NWNlZWY5ZWM4YjcxNmFhMjNhY2QwNTM0NTNiN2JiNDE4Y2VkNjZhYWY3OTRjZDU1MDY3MWY5ZGM3ZmQwNCIsInNpZ25hdHVyZV9zaGEyNTYiOiJhMGUyZWI2NTQ2ODI2NzBkNjdkNzY5YzI2NDdlYmNjMTdlZmRlZWEzOGZkZmQzM2I1NWMwOGI1NzkyNzVmYTVmIn0 -->
### `client.evaluateComplianceGate`

Operation ID: `evaluateComplianceGate`  
Route: `POST` `/v1/compliance/gate`  

#### Signature

```php
public function evaluateComplianceGate(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ComplianceGateRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Compliance gate verdict and SHA-256 attestation | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJldmFsdWF0ZUNvbXBsaWFuY2VHYXRlIn0 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJleHBvcnRTYXJpZiIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJleHBvcnRTYXJpZiIsInBhdGgiOiIvdjEvY29tcGxpYW5jZS9zYXJpZiIsInJlc291cmNlIjoiY29tcGxpYW5jZSIsInNlY3Rpb25fc2hhMjU2IjoiOGEyYjUwMWFhN2UwMTgyYTVmOWMzYTU5ZTg5YmZiNzQxMzRlZWY1NDUwNzUwNzg5Mzg2Yjg5YjBkYjViMjRiZiIsInNpZ25hdHVyZV9zaGEyNTYiOiI2ZmJiZmZlZGQ4MDNiZjgzZmJiYzVmOTM4ZjA4NDVjODU0YWRkZjQ3M2JhNGNlMjgwMDZiZDkzNGI1N2IxZGQ2In0 -->
### `client.exportSarif`

Operation ID: `exportSarif`  
Route: `POST` `/v1/compliance/sarif`  

#### Signature

```php
public function exportSarif(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `object` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | SARIF 2.1.0 JSON document | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJleHBvcnRTYXJpZiJ9 -->

## Resource `developer_intelligence`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJjb2xsZWN0RGV2ZWxvcGVyQXVkaXQiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiY29sbGVjdERldmVsb3BlckF1ZGl0IiwicGF0aCI6Ii9jbGkvbWFuYWdlZC9kZXZlbG9wZXItYXVkaXQiLCJyZXNvdXJjZSI6ImRldmVsb3Blcl9pbnRlbGxpZ2VuY2UiLCJzZWN0aW9uX3NoYTI1NiI6Ijc0ODMyM2RhYzk0ZTBjZGY0MjljNjJkMjhiZmIyZDM4NmZmMjBmYzU4NDY2YzIwN2ZhMDBlMThmZWE2NDllMmEiLCJzaWduYXR1cmVfc2hhMjU2IjoiNjM3NjU1OWFiNzE2ODc2MDcwNWFlNWIyYTUxODQ2ZGU5ZTM5ZjFkMGE1NjAxZWQ4MTA3NjgyNWZhN2Q4ODU1OSJ9 -->
### `client.collectDeveloperAudit`

Operation ID: `collectDeveloperAudit`  
Route: `POST` `/cli/managed/developer-audit`  

#### Signature

```php
public function collectDeveloperAudit(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `DeveloperAuditRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Versioned report with source coverage, missing evidence and immutable snapshot reference. | application/json (object) |
| `default` | Explicit authentication, paid access, source authorization, capacity or collection blocker. | none |

#### Canonical required-input example

```json
{
  "body": {
    "from": "2026-01-09",
    "repositoryId": "1",
    "to": "2026-01-18"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJjb2xsZWN0RGV2ZWxvcGVyQXVkaXQifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJjdXJyZW50RGV2ZWxvcGVySWRlbnRpdHkiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiY3VycmVudERldmVsb3BlcklkZW50aXR5IiwicGF0aCI6Ii9jbGkvbWFuYWdlZC9kZXZlbG9wZXItaWRlbnRpdHkiLCJyZXNvdXJjZSI6ImRldmVsb3Blcl9pbnRlbGxpZ2VuY2UiLCJzZWN0aW9uX3NoYTI1NiI6IjNmN2VkOGJlODc1YTAyMDMwZjI4YTZhYjdhZGE5NzY1OWMzNTJlNTJhMWJmNmE2YTk4ZWVhNTAyMGJlOTc0ZTQiLCJzaWduYXR1cmVfc2hhMjU2IjoiNGFlOTcyZjNjNGMwNGMzNzA2Y2JkNTA5ZDYzNDE0NDNiYWVjZmI3ZGZjODU0NmIzMTYzMDUxZmZjOTMyZTgwYiJ9 -->
### `client.currentDeveloperIdentity`

Operation ID: `currentDeveloperIdentity`  
Route: `POST` `/cli/managed/developer-identity`  

#### Signature

```php
public function currentDeveloperIdentity(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ManagedDeveloperIdentityRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Current verified identity and authorized repositories. | application/json (ManagedDeveloperIdentity) |
| `default` | Explicit account, GitHub identity or source authorization blocker. | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJjdXJyZW50RGV2ZWxvcGVySWRlbnRpdHkifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJkZWNsYXJlRGV2ZWxvcGVyUHJvamVjdENvbnRleHQiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiZGVjbGFyZURldmVsb3BlclByb2plY3RDb250ZXh0IiwicGF0aCI6Ii9jbGkvbWFuYWdlZC9hdWRpdC1jb250ZXh0IiwicmVzb3VyY2UiOiJkZXZlbG9wZXJfaW50ZWxsaWdlbmNlIiwic2VjdGlvbl9zaGEyNTYiOiI4YjBiY2NlOTY2YTQ0YWY4YTk5YTMyZTgxNmYxNDBjZGE4YWM2MTgzZTIwM2M3OTE3M2U3YTMyYWZjNzNmOGExIiwic2lnbmF0dXJlX3NoYTI1NiI6IjE5M2Y1MjAxYTQ1YTAzMzc0MmY0OWJlOWI0YzI3MzIyODk4NDQ5ZTY0NDllZWI0NmExZWZjYWY0N2FiMTVkNTAifQ -->
### `client.declareDeveloperProjectContext`

Operation ID: `declareDeveloperProjectContext`  
Route: `POST` `/cli/managed/audit-context`  

#### Signature

```php
public function declareDeveloperProjectContext(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `AuditContextRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Immutable declaration or correction receipt. | application/json (object) |
| `default` | Explicit authorization, contributor identity, correction or storage capacity blocker. | none |

#### Canonical required-input example

```json
{
  "body": {
    "declaration": {
      "contributorId": "1",
      "effectiveFrom": "2026-01-02",
      "effectiveTo": "2026-01-11",
      "snapshotId": "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
      "source": "example",
      "supersedes": "example",
      "type": "project_join",
      "value": "example"
    },
    "repositoryId": "1"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJkZWNsYXJlRGV2ZWxvcGVyUHJvamVjdENvbnRleHQifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJtYW5hZ2VkQXVkaXRTbmFwc2hvdHMiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoibWFuYWdlZEF1ZGl0U25hcHNob3RzIiwicGF0aCI6Ii9jbGkvbWFuYWdlZC9hdWRpdC1zbmFwc2hvdHMiLCJyZXNvdXJjZSI6ImRldmVsb3Blcl9pbnRlbGxpZ2VuY2UiLCJzZWN0aW9uX3NoYTI1NiI6IjM0YTllY2QyZDY3YzgzMjFhYzcxNTRiZThkNjJjYzM2MjNlZWI3ZTc2ODg1NDg2Y2VlMTRmNDY2NmJkMzk0ZDciLCJzaWduYXR1cmVfc2hhMjU2IjoiYTY4MTc3MjI1ZDNmNzY2MjJkMjc3MWUxYWZkZDE2MTY5ZDUyZjE3MzBkZTUwMTY2MmU0NDc3NTMzZGQzMTQ4MSJ9 -->
### `client.managedAuditSnapshots`

Operation ID: `managedAuditSnapshots`  
Route: `POST` `/cli/managed/audit-snapshots`  

#### Signature

```php
public function managedAuditSnapshots(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `AuditSnapshotsRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Snapshot list or digest-verified immutable envelope. | application/json (object) |
| `default` | Explicit authorization, expiry, missing snapshot or integrity blocker. | none |

#### Canonical required-input example

```json
{
  "body": {
    "action": "list",
    "repositoryId": "1"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJtYW5hZ2VkQXVkaXRTbmFwc2hvdHMifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJwcm92aWRlckNvc3RFdmlkZW5jZSIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJwcm92aWRlckNvc3RFdmlkZW5jZSIsInBhdGgiOiIvY2xpL21hbmFnZWQvZmlub3BzIiwicmVzb3VyY2UiOiJkZXZlbG9wZXJfaW50ZWxsaWdlbmNlIiwic2VjdGlvbl9zaGEyNTYiOiJkNGM3NTA0M2E4NGVjMjUyZWFjMWUxNGRiM2Y3NDRjMDlmZWQyNzI3ZjgyYTAyNmI1NjU4M2I3OWYyNTJkNTZmIiwic2lnbmF0dXJlX3NoYTI1NiI6IjczMzQ0ZjlkNmZhOTAwN2YwNGZhMjZkMjhiOWE5ZGUwZDQ2MDY2MmM0YmNhZTdmOGMxMGI1ODcxZmM3NTFiY2IifQ -->
### `client.providerCostEvidence`

Operation ID: `providerCostEvidence`  
Route: `POST` `/cli/managed/finops`  

#### Signature

```php
public function providerCostEvidence(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `FinOpsRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Server report or declaration receipt. Unknown costs remain null. | application/json (object) |
| `default` | Explicit permission, paid access, source or declaration validation blocker. | none |

#### Canonical required-input example

```json
{
  "body": {
    "action": "report"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJwcm92aWRlckNvc3RFdmlkZW5jZSJ9 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJzdWJtaXREZXZlbG9wZXJFdmlkZW5jZSIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJzdWJtaXREZXZlbG9wZXJFdmlkZW5jZSIsInBhdGgiOiIvY2xpL21hbmFnZWQvZGV2ZWxvcGVyLWV2aWRlbmNlIiwicmVzb3VyY2UiOiJkZXZlbG9wZXJfaW50ZWxsaWdlbmNlIiwic2VjdGlvbl9zaGEyNTYiOiJiYTFiNWVhYTMwYTdkZmJhYjE5ZDdmMTg4YmUwZjEzODlkN2ZiOGFkZDllNzQ5YmNmMmM2ZjRkOGQ1NTQ3OWUzIiwic2lnbmF0dXJlX3NoYTI1NiI6IjZiZDBlM2Y4MGFkZGI2ZGQ5NmE3MmRiMjg0MjlhZTVlMDAzODk3MzhiYzA0N2Y4ZjgyYWM2NTMzZGU1NmYxZDcifQ -->
### `client.submitDeveloperEvidence`

Operation ID: `submitDeveloperEvidence`  
Route: `POST` `/cli/managed/developer-evidence`  

#### Signature

```php
public function submitDeveloperEvidence(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `DeveloperEvidenceRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Accepted and duplicate span counts. | application/json (object) |
| `default` | Explicit identity, repository, paid access or evidence validation blocker. | none |

#### Canonical required-input example

```json
{
  "body": {
    "category": "coding",
    "input": {},
    "repositoryId": "1"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJzdWJtaXREZXZlbG9wZXJFdmlkZW5jZSJ9 -->

## Resource `health`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZXRIZWFsdGgiLCJtZXRob2QiOiJHRVQiLCJvcGVyYXRpb25faWQiOiJnZXRIZWFsdGgiLCJwYXRoIjoiL2hlYWx0aCIsInJlc291cmNlIjoiaGVhbHRoIiwic2VjdGlvbl9zaGEyNTYiOiJhMDc5NDgzYmMxMTljNTZlMWRmZTk3OWE3OGU4MjM0MjkxNTM2MzRkNGNmYWEyODY5YTQwYTc5ZWI1NDNlMjM1Iiwic2lnbmF0dXJlX3NoYTI1NiI6IjlkNjc1ZmIyOTI0MmFmZmI1Y2JkZTViODY0MWNiMDQ2OWM1MjBjZWJhOWM2YzQ3OTIwN2UwMGU3MjJmNmE5MDAifQ -->
### `client.getHealth`

Operation ID: `getHealth`  
Route: `GET` `/health`  

#### Signature

```php
public function getHealth(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Server health status | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZXRIZWFsdGgifQ -->

## Resource `reviews`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJidWlsZEF1dG9maXhCdW5kbGUiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiYnVpbGRBdXRvZml4QnVuZGxlIiwicGF0aCI6Ii92MS9yZXZpZXdzL2F1dG9maXgiLCJyZXNvdXJjZSI6InJldmlld3MiLCJzZWN0aW9uX3NoYTI1NiI6IjIzNGQwMTcxYWE5YTkxNTlkNjk3MmQ5ZmExOTMxZjhhOGI1MGRlMmQ5ZmJhN2U3ZGE2ZWM5Yzk2MDA3NmEyMTMiLCJzaWduYXR1cmVfc2hhMjU2IjoiOTAyMjMzY2RmYzQyZGRjNWY0ZGM4ZDJjZGQyYmE0MTY2MjQ2ZTAyY2FkMzFmNzcxMTk0ZTBjYTQ4MjkzZDlhOSJ9 -->
### `client.buildAutofixBundle`

Operation ID: `buildAutofixBundle`  
Route: `POST` `/v1/reviews/autofix`  

#### Signature

```php
public function buildAutofixBundle(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Remediation patch bundle | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJidWlsZEF1dG9maXhCdW5kbGUifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJjb21wdXRlUmlza1JhZGFyIiwibWV0aG9kIjoiUE9TVCIsIm9wZXJhdGlvbl9pZCI6ImNvbXB1dGVSaXNrUmFkYXIiLCJwYXRoIjoiL3YxL3Jldmlld3Mvcmlzay1yYWRhciIsInJlc291cmNlIjoicmV2aWV3cyIsInNlY3Rpb25fc2hhMjU2IjoiOGEyNWI1NDc1OGE2YmYxMzNhOTA4MDAxMGNkNGI0YWUxOWNiZDMzYjkzZGU2YWRmYWIyMzI0MjU2YmM0NzQ2MiIsInNpZ25hdHVyZV9zaGEyNTYiOiJiN2NiZDNiN2M1YWQ2YjA2N2E2NTQ5OTMxY2FkN2VkZGY2ODc3NWUyNDRjOGVjN2EwMjgxOWYzNjIwNTk0ZTIzIn0 -->
### `client.computeRiskRadar`

Operation ID: `computeRiskRadar`  
Route: `POST` `/v1/reviews/risk-radar`  

#### Signature

```php
public function computeRiskRadar(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | 6-axis Risk Radar telemetry | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJjb21wdXRlUmlza1JhZGFyIn0 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJjcmVhdGVSZXZpZXciLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiY3JlYXRlUmV2aWV3IiwicGF0aCI6Ii92MS9yZXZpZXdzIiwicmVzb3VyY2UiOiJyZXZpZXdzIiwic2VjdGlvbl9zaGEyNTYiOiJlMDgzZDkwMDJmN2M4MzFlMTVkMjI4YmMwMzY5Y2FlYzRlMjlmZjczY2Q5MjE2ZTE2NzkxZjk1MjQ2M2JlZDJkIiwic2lnbmF0dXJlX3NoYTI1NiI6IjI2ZWVlMTQzZDY5ZDVhOTAyMWI5NDVjMDVlMmViNDU3ZTQ1ODgzZWI2MGU2ODEyZmM0ZTNiNDAxYmQ2ODdlOWEifQ -->
### `client.createReview`

Operation ID: `createReview`  
Route: `POST` `/v1/reviews`  

#### Signature

```php
public function createReview(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Completed review result with findings, blast radius, and change stack | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJjcmVhdGVSZXZpZXcifQ -->

## Resource `saas`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJmaW5hbGl6ZU1ldGVyaW5nUXVvdGEiLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiZmluYWxpemVNZXRlcmluZ1F1b3RhIiwicGF0aCI6Ii92MS9zYWFzL21ldGVyaW5nL2ZpbmFsaXplIiwicmVzb3VyY2UiOiJzYWFzIiwic2VjdGlvbl9zaGEyNTYiOiJlODcyMTQ1ZjRkOGE3MWFkNzc5M2Q5M2RkNjllZjU0ZmM2ZTMwNGY0N2UwYjYyZDE0ZGY2YWYyMmQ1NjVhYTcxIiwic2lnbmF0dXJlX3NoYTI1NiI6ImYwZThhMGE0NWIxMmI4NzZmMDM5Mzk2ZTk5OWI0MTAwYjgxMTg0NGQzM2M5MjY0Mjg5MzNhYmY3ZTYxMTJmZGIifQ -->
### `client.finalizeMeteringQuota`

Operation ID: `finalizeMeteringQuota`  
Route: `POST` `/v1/saas/metering/finalize`  

#### Signature

```php
public function finalizeMeteringQuota(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `object` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Finalized metering settlement | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJmaW5hbGl6ZU1ldGVyaW5nUXVvdGEifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZXRTYWFzQmx1ZXByaW50IiwibWV0aG9kIjoiR0VUIiwib3BlcmF0aW9uX2lkIjoiZ2V0U2Fhc0JsdWVwcmludCIsInBhdGgiOiIvdjEvc2Fhcy9ibHVlcHJpbnQiLCJyZXNvdXJjZSI6InNhYXMiLCJzZWN0aW9uX3NoYTI1NiI6ImRiYTE1OWMzZjIxNWJhNWUyOTkzOTQyMGYwMjZkY2UwMTNjYzZiODM0NzhmNmVlN2RjNjE1MzU5OWExZWFkZjMiLCJzaWduYXR1cmVfc2hhMjU2IjoiZWIwZjczNGE1M2Q1ZjdkOGJkMWIzODI5MDZiOWVlNDJlNmU1ZThlN2IwNDJmZTk5OTg2YmFlYTg5NDg3NWUzMCJ9 -->
### `client.getSaasBlueprint`

Operation ID: `getSaasBlueprint`  
Route: `GET` `/v1/saas/blueprint`  

#### Signature

```php
public function getSaasBlueprint(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Autonomous SaaS blueprint | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZXRTYWFzQmx1ZXByaW50In0 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJpc3N1ZVN1cmZhY2VMZWFzZSIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJpc3N1ZVN1cmZhY2VMZWFzZSIsInBhdGgiOiIvdjEvc2Fhcy9zdXJmYWNlLWxlYXNlL2lzc3VlIiwicmVzb3VyY2UiOiJzYWFzIiwic2VjdGlvbl9zaGEyNTYiOiI0Yjg5Y2NjYmE1MDFkZjY0YWZiYzdhNzE0MWUwZmY4YzllMGFkN2FkNDM5NGJiMTQ4NzgwM2JhMjhkMGVkYzE3Iiwic2lnbmF0dXJlX3NoYTI1NiI6IjM3MWIzYWI5MDM2ZmNjYTlmNDg0NDQzZGFkNDcwZDYwZDFjNzM3NzdmZWI3Y2NkZGI1MzFjMGYwMTQwZDIzYWEifQ -->
### `client.issueSurfaceLease`

Operation ID: `issueSurfaceLease`  
Route: `POST` `/v1/saas/surface-lease/issue`  

#### Signature

```php
public function issueSurfaceLease(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `object` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Issued surface lease token | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJpc3N1ZVN1cmZhY2VMZWFzZSJ9 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJyZXNlcnZlTWV0ZXJpbmdRdW90YSIsIm1ldGhvZCI6IlBPU1QiLCJvcGVyYXRpb25faWQiOiJyZXNlcnZlTWV0ZXJpbmdRdW90YSIsInBhdGgiOiIvdjEvc2Fhcy9tZXRlcmluZy9yZXNlcnZlIiwicmVzb3VyY2UiOiJzYWFzIiwic2VjdGlvbl9zaGEyNTYiOiIyZTNjN2E5MzcyZTg4N2M1YjFjZGM1ZmY4OTE4NTAwNzYzMzQ0MTliY2YyNjMzMTUwNmZjYjQxM2VmYWM3MDcyIiwic2lnbmF0dXJlX3NoYTI1NiI6ImY4YzkyNmJlNGYwY2ZmZWRlMTE2ODExNzA3YmViMmY2MmI3NzZiYTFhNmYyN2UxY2RjMWM0N2IyMDk3MDdhZmQifQ -->
### `client.reserveMeteringQuota`

Operation ID: `reserveMeteringQuota`  
Route: `POST` `/v1/saas/metering/reserve`  

#### Signature

```php
public function reserveMeteringQuota(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `object` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Metering reservation record | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJyZXNlcnZlTWV0ZXJpbmdRdW90YSJ9 -->

## Resource `sbom`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZW5lcmF0ZVNib20iLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiZ2VuZXJhdGVTYm9tIiwicGF0aCI6Ii92MS9zYm9tIiwicmVzb3VyY2UiOiJzYm9tIiwic2VjdGlvbl9zaGEyNTYiOiI3ZDMyYzA4ZWI2ZGNhYWExMWMyYmEwNmRmODJkN2JhYmU2MDIyM2M1OTEyMDgzYjdlMmNkZTZkYTU0NTcxMzIyIiwic2lnbmF0dXJlX3NoYTI1NiI6IjI0NWRjMDMwODAzMzI2NzQ2NmIwMjRjZGViYTkxNjFkNzU0YTg5NmIxZWUzYzU3YjRmNzIzNjU3OWJkZDY3MDgifQ -->
### `client.generateSbom`

Operation ID: `generateSbom`  
Route: `POST` `/v1/sbom`  

#### Signature

```php
public function generateSbom(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | CycloneDX 1.5 SBOM JSON | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZW5lcmF0ZVNib20ifQ -->

## Resource `supply_chain`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJhbmFseXplU3VwcGx5Q2hhaW4iLCJtZXRob2QiOiJQT1NUIiwib3BlcmF0aW9uX2lkIjoiYW5hbHl6ZVN1cHBseUNoYWluIiwicGF0aCI6Ii92MS9zdXBwbHktY2hhaW4vYW5hbHl6ZSIsInJlc291cmNlIjoic3VwcGx5X2NoYWluIiwic2VjdGlvbl9zaGEyNTYiOiJhMTRkOGVkODI4ZDY5NTg0ZGQ2ZDIxZDQ0NmZhZWFiNTNhZjk3NDM4ZDVmMzU0ZjMxZDk1ZTRkZTRlYzA0YzY0Iiwic2lnbmF0dXJlX3NoYTI1NiI6Ijc2MmYxMzg3MmQwYzI0NjMwYjE5OWFlZjA4ZTE2YWI3YWI0NGFiOGYyNzgwZTQ2MjNjMzBjZWIxNGU5NmRkZjUifQ -->
### `client.analyzeSupplyChain`

Operation ID: `analyzeSupplyChain`  
Route: `POST` `/v1/supply-chain/analyze`  

#### Signature

```php
public function analyzeSupplyChain(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `ReviewRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Supply-chain security audit | none |

#### Canonical required-input example

```json
{
  "body": {
    "files": [
      {
        "filename": "example"
      }
    ]
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJhbmFseXplU3VwcGx5Q2hhaW4ifQ -->

## Resource `tasks`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJjcmVhdGVDb2RpbmdUYXNrIiwibWV0aG9kIjoiUE9TVCIsIm9wZXJhdGlvbl9pZCI6ImNyZWF0ZUNvZGluZ1Rhc2siLCJwYXRoIjoiL3YxL3Rhc2tzIiwicmVzb3VyY2UiOiJ0YXNrcyIsInNlY3Rpb25fc2hhMjU2IjoiZDgxN2Y0OWY1OTVmN2FiMDQ5ZmQ1ZjUxOThlMTMzYTczYWFkZTc5ZmUxY2QwNmI3OWNlOTgyZWU1YTdlYWEyMiIsInNpZ25hdHVyZV9zaGEyNTYiOiI2ZTk1ZTQwOTkyYjczNjY2OTFmNzY1NzVkZjYwNDExMjNkNDFkM2M3YWFhNzc1Yjc5ODg0OWNiNTY0ZjdiYmJiIn0 -->
### `client.createCodingTask`

Operation ID: `createCodingTask`  
Route: `POST` `/v1/tasks`  

#### Signature

```php
public function createCodingTask(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `object` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `201` | Created coding task | none |

#### Canonical required-input example

```json
{
  "body": {},
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJjcmVhdGVDb2RpbmdUYXNrIn0 -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJsaXN0Q29kaW5nVGFza3MiLCJtZXRob2QiOiJHRVQiLCJvcGVyYXRpb25faWQiOiJsaXN0Q29kaW5nVGFza3MiLCJwYXRoIjoiL3YxL3Rhc2tzIiwicmVzb3VyY2UiOiJ0YXNrcyIsInNlY3Rpb25fc2hhMjU2IjoiMTc0NWE3NWUyYWE5Njk5ODlmMjIyMGYzMjFiMzQyOTkyMDUwNDc0MmU2OWY1Y2U3Y2QxNTlkOTc1YmRhYmUxMSIsInNpZ25hdHVyZV9zaGEyNTYiOiIyNGU3M2FkZmZhMTEzYThkYzMxMDg5YTRkZTZmMTJmZTA5ODc0MjdkOWQ1MjIwNDdhMDk4NDJmMzE5YzMwYTIzIn0 -->
### `client.listCodingTasks`

Operation ID: `listCodingTasks`  
Route: `GET` `/v1/tasks`  

#### Signature

```php
public function listCodingTasks(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Task list | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJsaXN0Q29kaW5nVGFza3MifQ -->

## Resource `triage`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJnZXRUcmlhZ2VRdWV1ZSIsIm1ldGhvZCI6IkdFVCIsIm9wZXJhdGlvbl9pZCI6ImdldFRyaWFnZVF1ZXVlIiwicGF0aCI6Ii92MS90cmlhZ2UiLCJyZXNvdXJjZSI6InRyaWFnZSIsInNlY3Rpb25fc2hhMjU2IjoiODY4MGJkM2FlMjM1ZThjNGJlNDIzOWY3OTIzYzVlYWUxOWRkNDllNGU1YzgyNWI0MmY1YTNjNzcyNTllMzg4OSIsInNpZ25hdHVyZV9zaGEyNTYiOiI3ZGFkMDlkNWE3ZjhiOWQ0YjhmM2ZhNmQ4MDI4MzMzNjJhNDM0MWY4Y2JkNTNjMmM1ODI4M2I2NjZjNDFmYWZhIn0 -->
### `client.getTriageQueue`

Operation ID: `getTriageQueue`  
Route: `GET` `/v1/triage`  

#### Signature

```php
public function getTriageQueue(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Triaged PR queue | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJnZXRUcmlhZ2VRdWV1ZSJ9 -->

## Resource `waitlist`

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJsaXN0V2FpdGxpc3QiLCJtZXRob2QiOiJHRVQiLCJvcGVyYXRpb25faWQiOiJsaXN0V2FpdGxpc3QiLCJwYXRoIjoiL3YxL3dhaXRsaXN0IiwicmVzb3VyY2UiOiJ3YWl0bGlzdCIsInNlY3Rpb25fc2hhMjU2IjoiOTk0YTEyMWFkNWYyOTNmZjQ3OTVmY2I3ZGNlZjQzZmQxNDBjMjU4YTU1MTI5Nzc3YzNhZDkzNjdiOGRiMTA1MiIsInNpZ25hdHVyZV9zaGEyNTYiOiI2M2Q1OWU4ZWE5ZjVkZTg1Mjc2N2Q5MjJkOGU5NzA1ZDdmMjBjMDJmNzQzZGY5ZmRmMDFjZjg0NDlkNmYzNTAxIn0 -->
### `client.listWaitlist`

Operation ID: `listWaitlist`  
Route: `GET` `/v1/waitlist`  

#### Signature

```php
public function listWaitlist(): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| _none_ | | | | |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `200` | Waitlist entries | none |

#### Canonical required-input example

```json
{
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJsaXN0V2FpdGxpc3QifQ -->

<!-- omniwrap-api-operation eyJleGFtcGxlX3JlYXNvbiI6Imxhbmd1YWdlLWV4YW1wbGUtbm90LWdlbmVyYXRlZCIsImV4YW1wbGVfc3RhdHVzIjoidW5zdXBwb3J0ZWQiLCJtZW1iZXIiOiJyZWdpc3RlcldhaXRsaXN0IiwibWV0aG9kIjoiUE9TVCIsIm9wZXJhdGlvbl9pZCI6InJlZ2lzdGVyV2FpdGxpc3QiLCJwYXRoIjoiL3YxL3dhaXRsaXN0IiwicmVzb3VyY2UiOiJ3YWl0bGlzdCIsInNlY3Rpb25fc2hhMjU2IjoiY2NhNWVjNzkzZDhmYWFkYTAxZDkxMDE4NTMzZjExOGExZmNkNGU3ZDJhN2E2OTZlNGVmZWVlNjBhM2NlNjRkYSIsInNpZ25hdHVyZV9zaGEyNTYiOiI1ZDUwOWY0NTAyOTBmYjk5NDQ4YjE1ZGU4MDNhYWIwYTlmNzg4YTQzMmIwZWVmN2JjMTc5NjZkN2ZlMWY1Nzc0In0 -->
### `client.registerWaitlist`

Operation ID: `registerWaitlist`  
Route: `POST` `/v1/waitlist`  

#### Signature

```php
public function registerWaitlist(?array $body = null): array
```

#### Parameters

| Name | In | Required | Contract type | Description |
| --- | --- | --- | --- | --- |
| `body` | body | yes | `WaitlistRequest` |  |

#### Responses

| Status | Description | Content |
| --- | --- | --- |
| `201` | Waitlist entry created | none |

#### Canonical required-input example

```json
{
  "body": {
    "email": "example-c65f@example.test"
  },
  "content_type": "application/json",
  "parameters": []
}
```

#### SDK call example

Example status: `unsupported`  
Unsupported reason: `language-example-not-generated`

<!-- omniwrap-api-operation-end eyJvcGVyYXRpb25faWQiOiJyZWdpc3RlcldhaXRsaXN0In0 -->

