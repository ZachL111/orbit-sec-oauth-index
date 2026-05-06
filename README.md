# orbit-sec-oauth-index

`orbit-sec-oauth-index` is a PHP project in security tooling. Its focus is to implement a PHP security tooling project for oauth incremental indexing, using append-only fixtures and checkpoint recovery checks.

## Purpose

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Orbit Sec Oauth Index Review Notes

Start with `replay exposure` and `trust boundary`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## What Is Covered

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/orbit-sec-oauth-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `replay exposure` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Notes

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Command

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Audit Path

That command is also the regression path. It verifies the domain cases and catches mismatches between the CSV, metadata, and code.

## Limits

This remains a local project with deterministic fixtures. It does not depend on credentials, hosted services, or live data. Future work should add richer malformed inputs before widening the public API.
