#!/bin/bash

PROJECT_DIR="$(cd "$(dirname "$0")/.." && pwd)"

# Kill existing sessions
tmux has-session -t artisan 2>/dev/null && tmux kill-session -t artisan
tmux has-session -t npm 2>/dev/null && tmux kill-session -t npm

# Start Laravel server
tmux new-session -d -s artisan "cd $PROJECT_DIR && php artisan serve; bash"

# Start npm dev server
tmux new-session -d -s npm "cd $PROJECT_DIR && npm run dev; bash"

echo "✅ Servers started:"
echo " - artisan"
echo " - npm"