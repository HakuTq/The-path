#!/bin/bash

tmux has-session -t artisan 2>/dev/null && tmux kill-session -t artisan && echo "🛑 artisan stopped"
tmux has-session -t npm 2>/dev/null && tmux kill-session -t npm && echo "🛑 npm stopped"

echo "✅ All servers stopped"