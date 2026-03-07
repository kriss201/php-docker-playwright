.PHONY: shell, test--playwright, test--playwright-ui

shell:
	@docker compose exec -it server bash


# Playwright Tests
test--playwright:
	docker compose exec -it playwright npx playwright test  --workers=4 --reporter=list

test--playwright-ui:
	 docker compose exec -it playwright npx playwright test --ui-host=0.0.0.0  --ui-port=9323

