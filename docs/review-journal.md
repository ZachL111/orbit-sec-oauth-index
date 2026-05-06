# Review Journal

The review surface for `orbit-sec-oauth-index` is deliberately narrow: one fixture, one scoring rule, and one local check.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 143, lane `ship`
- `stress`: `claim drift`, score 149, lane `ship`
- `edge`: `replay exposure`, score 210, lane `ship`
- `recovery`: `policy width`, score 197, lane `ship`
- `stale`: `trust boundary`, score 176, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.
